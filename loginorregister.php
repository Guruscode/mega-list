<?php
require_once("__autoload.php");

$user =  new User;

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];



if($name == ""){

    $login_package = [      
        "email"=>$email,
        "password"=>$password
    ];

    if($user->login($login_package)){
        echo "done";
    }else{
        echo "invalid";
    }

}else{

    $register_package = [
        "name"=>$name,
        "email"=>$email,
        "password"=>$password
    ];

    if($user->create($register_package)){
        echo "done";
    }else{
        echo "invalid";
    }
    

}