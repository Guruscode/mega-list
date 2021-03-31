<?php

require_once('session.lib.php');

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

class Store extends Database  {

    protected $name = false;
    protected $session;
    
    public function index(){
        return "test";
    }
    public function __construct() {  

        parent::__construct();
        $this->session = new Session;        
               
    }

    public function create($array){

        //create a mew user
        $name = $array['name'];
        $email = $array['address'];
   

        $hash = md5($password);

        $try = $this->query("INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, '$name', '$email', '$hash')");

        if($try){
            return true;
        }else{
            return false;
        }

    }

}