<?php
require_once("__autoload.php");

$user =  new User;

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];



if($name == ""){

    $login_package = [      
        "email"=>$email,
        "password"=>$password
    ]

    $user->login($login_package);

}else{

    $register_package = [
        "name"=>$name,
        "email"=>$email,
        "password"=>$password
    ]

    

}