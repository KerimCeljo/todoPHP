<?php
require_once "Dao.php";
class TaskDao extends Dao
{

    public function __construct()
    {
        parent::__construct();
    }

    //input user data in db
    public function addTask($description)
    {
        session_start();

        //Editovati
        $user_id = $_SESSION['userId'] ? $_SESSION['userId']: 11;
        $task_list_id = $_SESSION['userId']==16? 1: 2;

        $stmt = $this->conn->prepare("INSERT INTO tasks (description, task_list_id, user_id) VALUES (?,?,?)");
        $stmt->execute([$description, $task_list_id, $user_id]);  
    }


    public function deleteTask($id) {

        $stmt = $this->conn->prepare("DELETE FROM tasks WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }

    public function listTasks($user_id){
        $stmt = $this->conn->prepare("SELECT description FROM tasks WHERE user_id = ?");
        $stmt->execute([$user_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }     
    
    public function listTasksForLoggedInUser(){

        session_start();
    
    
        if(isset($_SESSION['userId'])){
    
            $user_id = $_SESSION['userId'];
    
            $stmt = $this->conn->prepare("SELECT description FROM tasks WHERE user_id = ?");
            $stmt->execute([$user_id]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            // return Flight::json(array(
            //     'status' => 'successs',
            //     'tasks' => $stmt->fetchAll(PDO::FETCH_ASSOC)
            //   ));
        }
    
        return [];
    
        // return Flight::json(array(
        //     'status' => 'fail',
        //     'message' => 'User is not logged in'
        //   ));
    
        } 
    
  
}
?>