<?php


Flight::route('POST /taskList', function(){

    $name = Flight::request()->data->tagName;


    //return 'test';

    $daoObject = new TaskListDao;
    $daoObject->taskList($name);

    

});

?>