<?php 
    include_once("db.php");
    include_once("data.php");

    class taskManager {
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
            

            $res = $this->con->prepare("INSERT INTO tasks (task) VALUES(:task)");
            $res->execute($data);
        }

        public function getAllTasks(){
            $db = $this->con;
            $stm = $db->query('SELECT*FROM tasks');
            $rows = $stm->fetchAll();

            $tasks = array();
            foreach($rows as $row){
                $gettask = new task();
                $gettask->setId($row['id']);
                $gettask->setTask($row['task']);

                array_push($tasks, $gettask);
            }
            return $tasks;
        }
    }
?>