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

class User extends Session  {

    protected $name = false;

    
    
    public function __construct() {

        //check if user is logged in

       
               
    }

    public function create($array){

        //create a mew user
        $name = $array['name'];
        $email = $array['email'];
        $password = $array['password'];

        $hash = md5($password);

        $try = $s->query("INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, $name, $email, $hash)");

        if($try){
            return true;
        }else{
            return false;
        }

    }
}