<?php


Flight::route('POST /tagAdd', function(){

    $name = Flight::request()->data->tagName;


    //return 'test';

    $daoObject = new TagDao;
    $daoObject->addTag($name);

    

});




?>