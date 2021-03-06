<?php
/**
* Basic Database Class to Take care of all database logic
*
*
* fetch() methods stores result set in an array
* MySQL connection is closed with destruct method.
*
*/


class Database  {

    private $dbuser = 'root';
    private $dbpass = '';
    private $dbname = 'anakle';
    private $dbport = 3306;
    private $dbhost = 'localhost';
    private $db;  
    
    public $result;

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

        $this->result = $this->db->query($query);
        return $this->result;

    }

    public function fetch(){

        if(!$this->result){
            return "no results";
        }

        while($row = $this->result->fetch_assoc()){
            $rows[] = $row;
        }

        return $rows;

    }

    public function __destruct(){
        
        isset($this->db) ? mysqli_close($this->db) : null;

    }
 
    

}
