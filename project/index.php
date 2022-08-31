<?php
session_start();


if(empty($_SESSION['user'])){
    header("location: login.php");
}
include "lib/users.php";



include "design/index.php";