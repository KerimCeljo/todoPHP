<?php

Flight::route('GET /test', function(){
    new Dao;
    echo'From / test';
    //echo phpinfo();
  });



Flight::route('POST /register', function(){

    $fullname = Flight::request()->data->fullname;
    $username = Flight::request()->data->username;
    $password = Flight::request()->data->password;
    $email = Flight::request()->data->email;
    $phone = Flight::request()->data->phone;  

    $daoObject = new UserDao;
    $daoObject->register_user($fullname,$username,$password,$email,$phone);


});





?>