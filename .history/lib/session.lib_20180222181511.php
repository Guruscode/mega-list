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

class Session {

    protected $isLogged = false;
    
    
    public function __construct() {

       session_start();       
               
    }

    public function checkUser(){

        if(isset($_SESSION['loggedIn'])){

            $this->isLogged = true;

        }

        return $this->isLogged;

    }

    public function login($id){

        $_SESSION['loggedIn'] = $id;

    }

    public function logout(){

        unset($_SESSION['loggedIn']);
        session_destroy();

    }



}