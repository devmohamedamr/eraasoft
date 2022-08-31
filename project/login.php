<?php
session_start();
include "lib/users.php";

if(isset($_POST['email'])){
    $password = sha1($_POST['password']);
    $res =  checkEmailAndPassword($_POST['email'],$password);
    if($res == true){
        $_SESSION['user'] = true;
        header("location: index.php");
    }
}




include "design/login.html";