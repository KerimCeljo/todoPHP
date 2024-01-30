<?php


Flight::route('POST /api/taskAdd', function(){

    $description = Flight::request()->data->taskDesc;


    //return 'test';

    $daoObject = new TaskDao;
    $daoObject->addTask($description);

    return Flight::json(["very nice!"]);

});

Flight::route('DELETE /api/taskDelete/@id', function($id){

    $nesto = new TaskDao;
    $nesto->deleteTask($id);

    if ($nesto) {
        // Return a success message if the task was successfully deleted
        Flight::json(['message' => "Task with ID $id deleted successfully"]);
    } else {
        // Return an error message if something went wrong during deletion
        Flight::halt(500, 'Failed to delete task');
    }
});

Flight::route('GET /api/listTasks/@user_id', function($user_id){

    $taskDao = new TaskDao;
    $result = $taskDao->listTasks($user_id);


    Flight::json($result);
});

Flight::route('GET /api/listUserTasks', function(){
    //Works only for logged in users

    $taskDao = new TaskDao;
    $result = $taskDao->listTasksForLoggedInUser();


    Flight::json($result);
});





?>