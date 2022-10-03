<?php 
    include_once("../data/queries.php");

    class taskLogic{
        private $data;
        private $errors = [];
        private static $fields = ['task'];
        public $isSuccess = false;

        public function __construct($post_data)
        {
            $this->data = $post_data;
        }

        function checkInput($data){
            $data=trim($data);          // remove white spaces
            $data=stripslashes($data);  // removes backslashes added by the addslashes() function.
            $data=htmlspecialchars($data);
            return $data;
        } 
        
     
        public function insertlogic(){
            if(empty($this->checkInput($this->data['task']))){
                $this->taskError = 'This field can not be empty';
                $this->isSuccess = false;
                echo 'this field can not be empty';
                }
                else{
                    $taskAdd = new taskProperties();	
		            $taskManager = new dataQueries();
                    $taskAdd->setTask($this->checkInput($this->data['task']));
                    $taskManager->insertTast($taskAdd);
     
                    header("Location: index.php");
                    echo "success";
                }
        }
      
    }

?>

