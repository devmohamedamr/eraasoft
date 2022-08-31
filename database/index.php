<?php


$connect =  mysqli_connect("localhost","root","","egybest");
$name = $_POST['name'];

mysqli_query($connect,"INSERT INTO `category` (`name`) VALUES ('$name')");

if(mysqli_affected_rows($connect) == 1){
    header("LOCATION: table.php");
}



mysqli_close($connect);
