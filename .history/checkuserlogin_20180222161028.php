<?php

require_once("__autoload.php");

$session =  new Session;

$session->logout();

if($session->checkUser()){

    echo "yes";

}else{

    echo "no";

}





