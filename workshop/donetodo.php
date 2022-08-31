<?php

session_start();
include "lib/todo.php";
if(empty($_SESSION['login'])){
    header("LOCATION: login.php");
}


$res =  done($_GET['id']);
if($res == 1){
    header("location: index.php");
}