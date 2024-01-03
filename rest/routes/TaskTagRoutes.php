<?php


Flight::route('POST /taskTag', function(){

    $drugo = Flight::request()->data->tagName;


    //return 'test';

    $daoObject = new TaskTagDao;
    $daoObject->addTag($drugo);

    

});




?>