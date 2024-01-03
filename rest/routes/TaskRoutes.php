<?php


Flight::route('POST /taskAdd', function(){

    $description = Flight::request()->data->taskDesc;


    //return 'test';

    $daoObject = new TaskDao;
    $daoObject->addTask($description);

    

});




?>