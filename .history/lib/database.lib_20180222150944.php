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

    /*
	Get an instance of the Database
	@return void
    */
    
    public function __construct() {

        
        $this->db = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);

        if (mysqli_connect_errno()) {
            
            trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(), E_USER_ERROR);
           
        }
        else{
            return $this->db
        }
               
    }

 
    

}