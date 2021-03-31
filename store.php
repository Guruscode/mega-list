<?php
require_once("__autoload.php");

$store =  new Store;




    if($store->create($_POST)){
        echo "done";
    }else{
        echo "invalid";
    }
