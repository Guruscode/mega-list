<?php

/**
* Basic Session Class 
*
*

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
