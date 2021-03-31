<?php


class Database  {

    protected $dbuser;
    protected $dbpass;
    protected $dbname;
    protected $dbport;
    protected $dbhost;


    function __construct() {
        
    }

    public function index(){
        echo "I am inside database";
    }

}