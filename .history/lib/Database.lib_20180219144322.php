<?php


class Database  {

    protected $dbuser;
    protected $dbpass;
    protected $dbname;
    protected $dbport;
    protected $dbhost;
    protected $db;    

    function __construct() {
        
        $this->db = mysqli_connect($host, $user, $password, $db);

    }

    public function index(){
        echo "I am inside database";
    }

}