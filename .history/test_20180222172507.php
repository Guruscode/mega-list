<?php

require_once("__autoload.php");

$s =  new Database();

$try = $s->query("SELECT * FROM `users`");

echo "<pre>";
print_r($s->fetch());






