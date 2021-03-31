<?php


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
            return "Database error " . mysqli_connect_error();
            exit();
        }else{
            return;
        }
    }

    public function index(){
        echo "I am inside database";
    }

}