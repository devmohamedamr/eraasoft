<?php
session_start();
include "lib/todo.php";
if(empty($_SESSION['login'])|| $_SESSION['login']['admin'] == 0){
    header("LOCATION: login.php");
}


$res =  delete($_GET['id']);
if($res == 1){
    header("location: index.php");
}