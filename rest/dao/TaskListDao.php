<?php
require_once "Dao.php";
class TaskListDao extends Dao
{

    public function __construct()
    {
        parent::__construct();
    }

    //input user data in db
    public function taskList($name)
    {

        $stmt = $this->conn->prepare("INSERT INTO task_lists (name, user_id) VALUES (?,?)");
        $stmt->execute([$name, 16]);  
    }

    public function deleteTaskList($id) {

        $stmt = $this->conn->prepare("DELETE FROM task_lists WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }
  
}
?>