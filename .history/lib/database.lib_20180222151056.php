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
    
    public result;

    /*
	Get an instance of the Database
	@return void
    */
    
    public function __construct() {

        
        $this->db = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);

        if (mysqli_connect_errno()) {
            
            trigger_error("Failed to conencto to MySQL: " . mysqli_connect_error(), E_USER_ERROR);
           
        }
        else{
            return $this->db;
        }
               
    }

    public function query($query){

        $this->result = $this->connection->query($query);
        return $this->result;

    }
 
    

}