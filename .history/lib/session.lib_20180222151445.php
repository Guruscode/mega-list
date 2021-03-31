<?php
use Database as db;
/*
* Database Class to take care of Database functions
*/

class Session extends Database {

    public function index(){
       $d = new db;

       $d->connect();
    }


}