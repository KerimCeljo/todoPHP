<?php


Flight::route('POST /register', function(){

    $fullname = Flight::request()->data->fullname;
    $username = Flight::request()->data->username;
    $password = Flight::request()->data->password;
    $email = Flight::request()->data->email;
    $phone = Flight::request()->data->phone;  

    //return 'test';

    $daoObject = new UserDao();
    $daoObject->register_user($fullname,$username,$password,$email,$phone);

    

});

Flight::route('GET /userTable', function(){
    $nesto = new UserDao;
    return  $nesto->userTable();
    
});



Flight::route('POST /login', function(){

    $username = Flight::request()->data->username;
    $password = Flight::request()->data->password;
 

    $daoObject = new UserDao();
    $daoObject->login_user($username,$password);

    

});


Flight::route('DELETE /usersDelete/@id', function($id){

    $nesto = new UserDao;
    $nesto->deleteUser($id);

    if ($nesto) {
        // Return a success message if the user was successfully deleted
        Flight::json(['message' => "User with ID $id deleted successfully"]);
    } else {
        // Return an error message if something went wrong during deletion
        Flight::halt(500, 'Failed to delete user');
    }
});


?>