<?php

require_once("__autoload.php");

$s =  new User();

$try = $s->query(['email'=>'xyluz@ymail.com','password'=>'National1']);

if($try){
    echo "done";
}else{
    echo "no";
}






