<?php 
    class task {
        private $id;
        private $task;

        public function getId(){
            return $this->id;
        }
        public function setId($value){
            $this->id = $value;
        }

        public function getTask(){
            return $this->task;
        }
        public function setTask($value){
            $this->task = $value;
        }
    }
?>