<?php
    
    class DBController{
        // Database connection properties
        protected $host = 'localhost';
        protected $user = 'root';
        protected $password = '';
        protected $database = 'shopee';
        protected $port = 3307;

        //call constructor
        public function __construct(){
            $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database, $this->port);
            
            if ($this->con->connect_error){
                echo "Fail".$this->con->connect_error;
            }
        }

        public function __destruct(){
            $this->closeConnection();
        }
    
        //close connection to DB
        protected function closeConnection(){
            if ($this->con!=null){
                $this->con->close();
                $this->con=null;
            }
        }
    }

    
    

?>