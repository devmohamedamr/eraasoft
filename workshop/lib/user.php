<?php


include "connection.php";

function insertUser($name,$email,$password){
    mysqli_query(connection(),"INSERT INTO `user` (`name`,`email`,`password`) VALUES ('$name','$email','$password')");
    return mysqli_affected_rows(connection());
}



function selectUserByEmailAndPassword($email,$password){
    $res =  mysqli_query(connection(),"SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'");
    return mysqli_fetch_assoc($res);
}
