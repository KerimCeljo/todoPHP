<?php

require './vendor/autoload.php';
require './rest/routes/UserRoutes.php';

require_once './rest/dao/UserDao.php';


Flight::route('GET /test', function(){
    echo'From / tesdasdsadasdsadsadsadsadsat';
    //echo phpinfo();
  });

Flight::route('GET /', function(){

  new Dao;
  echo'Neki eko';
  //echo phpinfo();
});


Flight::route('GET /userTable', function(){

  echo 'captable result';

  $nesto = new UserDao;
  $rez = $nesto->userTable();


  var_dump($rez);
});



Flight::start();

?>