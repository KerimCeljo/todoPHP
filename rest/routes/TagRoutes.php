<?php


Flight::route('POST /tagAdd', function(){

    $name = Flight::request()->data->tagName;


    //return 'test';

    $daoObject = new TagDao;
    $daoObject->addTag($name);

    

});

Flight::route('DELETE /tagDelete/@id', function($id){

    $nesto = new TagDao;
    $nesto->deleteTag($id);

    if ($nesto) {
        // Return a success message if the tag was successfully deleted
        Flight::json(['message' => "Tag with ID $id deleted successfully"]);
    } else {
        // Return an error message if something went wrong during deletion
        Flight::halt(500, 'Failed to delete tag');
    }
});





?>