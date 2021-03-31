<?php


class Database  {

    protected $dbuser = 'root';
    protected $dbpass = 'root';
    protected $dbname = 'anakle';
    protected $dbport = 3306;
    protected $dbhost = 'localhost';
    protected $db;    

    function __construct() {

        $this->db = mysqli_connect($host, $dbuser, $dbpass, $dbname);

    }

    public function index(){
        echo "I am inside database";
    }

}