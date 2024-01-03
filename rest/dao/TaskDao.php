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

        $stmt = $this->conn->prepare("INSERT INTO tasks (description, task_list_id, user_id) VALUES (?,?,?)");
        $stmt->execute([$description, 1, 16]);  
    }


    public function deleteTask($id) {

        $stmt = $this->conn->prepare("DELETE FROM tasks WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }
  
}
?>