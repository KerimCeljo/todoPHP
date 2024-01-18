<?php


Flight::route('POST /api/register', function(){

    $fullname = Flight::request()->data->fullname;
    $username = Flight::request()->data->username;
    $password = Flight::request()->data->password;
    $email = Flight::request()->data->email;
    $phone = Flight::request()->data->phone;  

    var_dump(Flight::request()->data->username);


    //return 'test';

    $daoObject = new UserDao();
    //$daoObject->register_user($fullname,$username,$password,$email,$phone);

    

});

Flight::route('GET /api/userTable', function(){
    $nesto = new UserDao;
    return  $nesto->userTable();
    
});



Flight::route('POST /api/login', function(){

    $username = Flight::request()->data->username;
    $password = Flight::request()->data->password;
 
    //print "session prije login-a" .$_SESSION;

    $daoObject = new UserDao();
    $daoObject->login_user($username,$password);
    //print implode(" ", $daoObject->login_user($username,$password));

    
    //print "session poslije login-a" . implode(" ",$_SESSION);
    

});


Flight::route('DELETE /api/usersDelete/@id', function($id){

    $nesto = new UserDao;
    $nesto->deleteUser($id);

    if ($nesto) {
        // Return a success message if the user was successfully deleted
        Flight::json(['message' => "User with ID $id deleted successfully"]);
    } else {
        // Return an error message if something went wrong during deletion
        Flight::halt(500, 'Failed to delete user');
    }
});

Flight::route('PUT /api/user/edit/@id', function($id){

    
    $fullname = Flight::request()->data->fullname;
    $username = Flight::request()->data->username;
    $password = Flight::request()->data->password;
    $email = Flight::request()->data->email;
    $phone = Flight::request()->data->phone;  

    //var_dump(Flight::request()->data);

    //return 'test';

    $daoObject = new UserDao();
    $daoObject->edit_user($id,$fullname,$username,$password,$email,$phone);

    

});


?>