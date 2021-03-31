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
    protected $instance; 
    protected $connection; 

    /*
	Get an instance of the Database
	@return void
    */
    
    private function __construct() {

        
        $this->db = mysqli_connect($this->dbhost, $this->dbuser, $$this->dbpass, $$this->dbname);

        if (mysqli_connect_errno()) {
            
            echo "Database error : " . mysqli_connect_error();
           
        }else{
            echo "Connected";
        }

               
    }

    /*
	Get an instance of the Database
	@return Instance
	*/
	public static function getInstance() {
		if(!self::$_instance) { // If no instance then make one
			self::$_instance = new self();
		}
		return self::$_instance;
	}
 

    public function index(){
        echo "I am inside database";
    }

    public function query(){



    }

    public function sort(){

        
    }

}