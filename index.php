<?php

require './vendor/autoload.php';
require './rest/routes/UserRoutes.php';
require './rest/routes/TaskRoutes.php';
require './rest/routes/TagRoutes.php';
require './rest/routes/TaskListRoutes.php';
require './rest/routes/TaskTagRoutes.php';

require_once './rest/dao/UserDao.php';
require_once './rest/dao/TaskDao.php';
require_once './rest/dao/TagDao.php';
require_once './rest/dao/TaskListDao.php';
require_once './rest/dao/TaskTagDao.php';

Flight::route('GET /test', function(){
    echo'From / tesdasdsadasdsadsadsadsadsat';
    //echo phpinfo();
  });

Flight::route('GET /login', function(){

  Flight::render('login');
});

Flight::route('GET /home', function(){

  Flight::render('todolistForm');
});

Flight::route('GET /', function(){

  Flight::render('landingPage');
});

Flight::route('GET /userTable', function(){

  echo 'captable result';

  $nesto = new UserDao;
  $rez = $nesto->userTable();


  var_dump($rez);
});



Flight::start();

?>