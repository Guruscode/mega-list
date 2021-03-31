<?php

require_once("__autoload.php");

$s =  new User;
echo "<pre>";
print_r($s->create(['name'=>'see','email'=>'xyluz@yms.com','password'=>'pasfdsgf']));





