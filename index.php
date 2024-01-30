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

Flight::route('GET /', function(){
  Flight::render('app');
});
/*
Flight::route('GET /nesto', function(){
  new Dao;
});
*/

Flight::start();

?>