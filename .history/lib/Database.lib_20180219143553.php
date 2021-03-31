<?php


class Database  {

    function __construct() {
        echo "In BaseClass constructor\n";
    }

    public function index(){
        return "I am inside database";
    }

}