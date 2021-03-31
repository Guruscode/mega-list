<?php

require_once("__autoload.php");

$s =  new Database;

$try = $s->query("INSERT INTO `users` ('name','email','password') VALUES('yes','why','no')");

echo $try;






