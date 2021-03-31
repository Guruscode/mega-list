<?php

/**
* Basic Session Class to Take care of all database logic
*
*
* fetch() methods stores result set in an array
* MySQL connection is closed with destruct method.
*
* @author Seyi Onifade <xyluz@ymail.com>
* @copyright xyluz
* @license GNU GENERAL PUBLIC LICENSE Version 3
*/

class Session extends Database {

    protected $isLogged = false;

    
    
    public function __construct() {

        //check if user is logged in
       
               
    }

}