<?php

include "lib/user.php";


if(isset($_POST['name'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
    
    $res = insertUser($name,$email,$password);

    if($res == 1){
        header("LOCATION: login.php"); 
    }

}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="register.php" method="post">
        <input type="text" name="name">
        <input type="text" name="email">
        <input type="password" name="password">
        <input type="submit" value="register">
    </form>
</body>
</html>