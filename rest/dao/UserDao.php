<?php
require_once "Dao.php";

class UserDao extends Dao
{

    public function __construct()
    {
        parent::__construct();
    }

    //input user data in db
    public function register_user($fullname,$username,$password,$email,$phone)
    {

    

    if (strlen($username) < 3) {
        return Flight::json(array(
          'status' => 'error',
          'message' => 'The username should be longer than 3 characters.'
        ));
        die;
      }
  
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return Flight::json(array(
          'status' => 'error',
          'message' => "The email '" . $email . "' address is not valid."
        ));
        die;
      }


    // Validate password against Pwned Passwords API
    $isPasswordBreached = $this->validatePasswordAgainstPwnedPasswords($password); 
    
    if ($isPasswordBreached) {
        // Password found in breaches
        return Flight::json([
            'status' => 'error',
            'message' => 'This password has been exposed in previous data breaches.'
        ]);
    } else {

    // Use of database connection from dao.php

    $stmt = $this->conn->prepare("INSERT INTO users (full_name, username, password, email, phone_num) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$fullname, $username, $password, $email, $phone]);


    // validation
    return Flight::json(array(
      'status' => 'success',
      'message' => 'User registered successfully'
    ));
    }
        
    }

    private function validatePasswordAgainstPwnedPasswords($password){
        // Hash the password using SHA-1
        $hashedPassword = strtoupper(sha1($password)); // Convert to uppercase as per API requirements
    
        // Take the first 5 characters of the hash
        $partialHash = substr($hashedPassword, 0, 5);
    
        // Make a GET request to the Pwned Passwords API
        $apiUrl = "https://api.pwnedpasswords.com/range/" . $partialHash;
        $response = @file_get_contents($apiUrl); // Use @ to suppress warnings/errors
    
        if ($response !== false) {
            // Check if the remaining part of the hashed password (suffix) exists in the response
            $suffix = substr($hashedPassword, 5);
            return strpos($response, $suffix) !== false;
        } else {
            // Handle API request failure or error
            return false;
        }
    }
       public function userTable(){

      $stmt = $this->conn->prepare("SELECT * FROM users");
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }


    public function login_user($username,$password){



    $stmt = $this->conn->prepare("SELECT id, username, full_name FROM users WHERE username = ? AND password = ? ");
    $stmt->execute([$username, $password]);
   
    $resultUserId = $stmt->fetchAll(PDO::FETCH_COLUMN)[0];

      if($resultUserId){

      session_start();
      $_SESSION['userId'] = $resultUserId;

      return Flight::json(array(
        'status' => 'success',
        'message' => 'User found'
      ));
    } else {
      return Flight::json(array(
        'status' => 'fail',
        'message' => 'User NOT found'
      ));
        }

    }

    public function deleteUser($id) {

    $stmt = $this->conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  
}
?>