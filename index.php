<?php

require './vendor/autoload.php';
require './rest/dao/Dao.php';
require './routes/UserRoutes.php';

Flight::route('GET /', function(){
  new Dao;
  //echo'Hello World';
  //echo phpinfo();
});

Flight::start();

?>