<?php

 class Dao{

    protected $conn;

    public function __construct(){
        try {

        /** TODO
        * List parameters such as servername, username, password, schema. Make sure to use appropriate port
        */

        $servername = "localhost";
        $username = "root";
        $password = "root";
        $schema = "todo";

        /*options array neccessary to enable ssl mode - do not change*/
        $options = array(
        	PDO::MYSQL_ATTR_SSL_CA => 'https://drive.google.com/file/d/1g3sZDXiWK8HcPuRhS0nNeoUlOVSWdMAg/view?usp=share_link',
        	PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,

        );



        /** TODO
        * Create new connection
        * Use $options array as last parameter to new PDO call after the password
        */
        $this->conn = new PDO("mysql:host=$servername;dbname=$schema", $username, $password, $options);

        // set the PDO error mode to exception
          $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          echo "Connected successfully";
        } catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
        }
    }








 }


?>