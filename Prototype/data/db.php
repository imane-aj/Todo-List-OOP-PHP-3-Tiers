<?php 
    class database {
        private $con         = null;
        private $db_name     = "oop_php";
        private $user        = "root";
        private $db_pwd      = "";
        private $server_name = "localhost";

        public function connect_db(){
            try{
                $this->con = new PDO("mysql:host=".$this->server_name.";dbname=".$this->db_name, $this->user, $this->db_pwd);
                $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connected successfully";
            }catch(PDOexception $e){
                die($e->getMessage);
            }
           return $this->con;
        }
 
        public function discount(){
            $this->con = null;
        }
    }
?>









