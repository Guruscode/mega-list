<?php
use Database as db;
/*
* Database Class to take care of Database functions
*/

class Session  {

    public function index(){
        db->connect();
    }


}