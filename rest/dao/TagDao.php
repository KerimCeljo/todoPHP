<?php
require_once "Dao.php";
class TagDao extends Dao
{

    public function __construct()
    {
        parent::__construct();
    }

    //input user data in db
    public function addTag($name)
    {

        $stmt = $this->conn->prepare("INSERT INTO tags (name) VALUES (?)");
        return $stmt->execute([$name]);  
    }
  
}
?>