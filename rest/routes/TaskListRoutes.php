<?php


Flight::route('POST /api/taskList', function(){

    $name = Flight::request()->data->tagName;


    //return 'test';

    $daoObject = new TaskListDao;
    $daoObject->taskList($name);
});

Flight::route('DELETE /api/taskListDelete/@id', function($id){

    $nesto = new TaskListDao;
    $nesto->deleteTaskList($id);

    if ($nesto) {
        // Return a success message if the TaskList was successfully deleted
        Flight::json(['message' => "TaskList with ID $id deleted successfully"]);
    } else {
        // Return an error message if something went wrong during deletion
        Flight::halt(500, 'Failed to delete TaskList');
    }
});

?>