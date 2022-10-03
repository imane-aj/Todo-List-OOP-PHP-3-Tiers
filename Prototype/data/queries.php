<?php 
    include_once("db.php");
    include_once("data.php");

    class dataQueries {
        private $con = null;
        
        public function __construct(){
            $db = new database();
            $this->con = $db->connect_db();

            if(!$this->con){
                die("Error while connection ..!!");
            }
        }
                
        public function insertTast($task){
            $data = [
                "task" => $task->getTask()
            ];
            

            // $insertQuery = "INSERT INTO tasks (task) VALUES(?)";

            $res = $this->con->prepare("INSERT INTO tasks (task) VALUES(:task)");
            $res->execute($data);
        }

        // public function getAllTasks(){
        //     $db = database::connect();
        //     $queryGetAll = 'SELECT*FROM tasks';
        // }
    }
?>