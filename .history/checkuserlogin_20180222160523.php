<?php

require_once("__autoload.php");

$session =  new Session;

if($session->checkUser()){

    echo "yes";

}else{

    echo "no";

}