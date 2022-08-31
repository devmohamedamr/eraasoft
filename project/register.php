<?php

include "lib/users.php";


if(isset($_POST['name'])){
    $password = sha1($_POST['password']);
    createNewUsere($_POST['name'],$_POST['email'],$password);
}






include "design/register.html";