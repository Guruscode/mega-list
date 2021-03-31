<?php
/*
* Database Class to take care of Database functions
*/

class Database  {

    protected $dbuser = 'root';
    protected $dbpass = 'root';
    protected $dbname = 'anakle';
    protected $dbport = 3306;
    protected $dbhost = 'localhost';
    protected $db;    

    function __construct() {

        
        $this->db = mysqli_connect($this->dbhost, $this->dbuser, $$this->dbpass, $$this->dbname);
        if (mysqli_connect_errno()) {
            
            echo "Database error " . mysqli_connect_error();
           
        }
        
    }

    public function connect(){

        

    }   

    public function index(){
        echo "I am inside database";
    }

    public function query(){



    }

    public function sort(){

        
    }

}