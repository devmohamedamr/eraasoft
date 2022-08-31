<?php
session_start();
include "lib/user.php";
if(isset($_POST['email'])){
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

   $res =   selectUserByEmailAndPassword($email,$password);

    if(!empty($res)){
        $_SESSION['login'] = $res;
        header("LOCATION: index.php");
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
    <form action="login.php" method="post">
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="submit" value="login">
    </form>
</body>
</html>