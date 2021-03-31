<?php
/*
* Database Class to take care of Database functions
*/

class Database  {

    private $dbuser = 'root';
    private $dbpass = 'root';
    private $dbname = 'anakle';
    private $dbport = 3306;
    private $dbhost = 'localhost';
    private $db;   
    private static $instance; 


    /*
	Get an instance of the Database
	@return void
    */
    
    private function __construct() {

        
        $this->db = mysqli_connect($this->dbhost, $this->dbuser, $$this->dbpass, $$this->dbname);

        if (mysqli_connect_errno()) {
            
            trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(), E_USER_ERROR);
           
        }
               
    }

    /*
	Get an instance of the Database
	@return Instance
    */
    
	private static function getInstance() {

        if(!self::$_instance) { // If no instance then make one
            
            self::$_instance = new self();
            
        }
        
        return self::$_instance;
        
    }
    
    public function getConnected(){

        return $this->db;

    }
 

}