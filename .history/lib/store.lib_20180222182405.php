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


    public function __construct() {  

        parent::__construct();           
               
    }

    public function create($array){

        //create a mew user
        $store_name = $array['store_name'];
        $store_address = $array['store_address'];   


        $try = $this->query("INSERT INTO `stores` (`id`, `name`, `address`) VALUES (NULL, '$name', '$address')");

        if($try){
            return true;
        }else{
            return false;
        }

    }

    public function listsAll(){

        $try = $this->query("SELECT * FROM `stores`");
        return $try;

    }

}