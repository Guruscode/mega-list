<?php

require_once("__autoload.php");

$s =  new Database;

$try = $s->query("INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, 'rds', 'dfsd', 'fsfsd')");


echo $try;






