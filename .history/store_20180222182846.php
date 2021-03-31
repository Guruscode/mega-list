<?php
require_once("__autoload.php");

print_r($_POST);

$store =  new Store;




    if($store->create($_POST)){
        echo "done";
    }else{
        echo "invalid";
    }
