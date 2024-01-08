<?php


Flight::route('POST /api/taskTag', function(){

    $drugo = Flight::request()->data->tagName;


    //return 'test';

    $daoObject = new TaskTagDao;
    $daoObject->addTag($drugo);

    

});

Flight::route('DELETE /api/taskTagDelete/@id', function($id){

    $nesto = new TaskTagDao;
    $nesto->deleteTaskTag($id);

    if ($nesto) {
        // Return a success message if the taskTag was successfully deleted
        Flight::json(['message' => "TaskTag with ID $id deleted successfully"]);
    } else {
        // Return an error message if something went wrong during deletion
        Flight::halt(500, 'Failed to delete task');
    }
});




?>