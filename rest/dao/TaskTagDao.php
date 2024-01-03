<?php
require_once "Dao.php";
class TaskTagDao extends Dao
{

    public function __construct()
    {
        parent::__construct();
    }

    //input user data in db
    public function addTag($drugo)
    {

        $stmt = $this->conn->prepare("INSERT INTO tasks (drugo, task_list_id, user_id) VALUES (?,?,?)");
        $stmt->execute([$drugo, 1, 16]);  
    }

    public function deleteTaskTag($id) {

        $stmt = $this->conn->prepare("DELETE FROM task_tags WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }
  
}
?>