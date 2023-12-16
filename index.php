<?php

require './vendor/autoload.php';
require './rest/dao/Dao.php';

Flight::route('GET /', function(){
  new Dao;
  //echo'Hello World';
  //echo phpinfo();
});

Flight::start();

?>