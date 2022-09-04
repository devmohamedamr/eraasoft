<?php

session_start();
include "lib/todo.php";
if(empty($_SESSION['login'])){
    header("LOCATION: login.php");
}

$error = [];

if(isset($_POST['title'])){
    $title = $_POST['title'];
    $body = $_POST['body'];

    $filetmp = $_FILES['img']['tmp_name'];
    $img = $_FILES['img']['name'];

    move_uploaded_file($filetmp,"upload/".$img);
    $user_id = $_SESSION['login']['id'];

    if(empty($title) || strlen($title) == 0 || $title == ''){
        $error[] = "title is required";
    }


    if(empty($body) || strlen($body) == 0 || $body == ''){
        $error[] = "body is required";
    }
    if(count($error)==0){
        $res =  addTodo($title,$body,$img,$user_id);

        if($res == 1){
            header("location: index.php");
        }
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
    <?php if(count($error)>0): ?>
    <ul>
    <?php foreach($error as $e): ?>

        <li><?= $e; ?></li>
    <?php endforeach; ?>
    </ul>
    <?php endif; ?>
    <form action="addtodo.php" method="post" enctype="multipart/form-data">
        <input type="text" name="title">
        <textarea name="body"></textarea>
        <input type="file" name="img">
        <input type="submit" value="save">
    </form>
</body>
</html>