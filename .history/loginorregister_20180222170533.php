<?php
require_once("__autoload.php");

$user =  new User;

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];


if($name == ""){

    //do login

}else{

    //do register
    $db->query("INSERT INTO users");

}