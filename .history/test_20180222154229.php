<?php

require_once("__autoload.php");

$s =  new Database;

$try = $s->query("INSERT `users` ('name','email','password') VALUES('yes','why','no')");






