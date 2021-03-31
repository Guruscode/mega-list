<?php

require_once("__autoload.php");

$session =  new Session;

$_SESSION['loggedIn'] = "1";

if($session->checkUser()){

    echo "yes 1";

}else{

    echo "no 1";

}





