<?php

session_start();
include "lib/todo.php";
if(empty($_SESSION['login']) || $_SESSION['login']['admin'] == 0){
    header("LOCATION: login.php");
}

if(isset($_POST['body'])){

    $task = $_POST['task'];
    $body = $_POST['body'];
    $id = $_POST['id'];

  
        $filetmp = $_FILES['img']['tmp_name'];
        $img = $_FILES['img']['name'];
    
        move_uploaded_file($filetmp,"upload/".$img);    
  

   
    $res =  updateTodo($task,$body,$img, $id);
    if($res == 1){
        header("location: index.php");
    }

}else{
    $todo =  getTodoById($_GET['id']);
 
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
    <form action="edittodo.php" method="post" enctype="multipart/form-data">
        <input type="text" name="task" value="<?= $todo['task']; ?>">
        <textarea name="body"><?= $todo['body']; ?></textarea>
        <input type="hidden" value="<?= $todo['id']; ?>" name="id" >
        <img width="100" src="upload/<?= $todo['img']; ?>">
        <input type="file"  name="img">
        <input type="submit" value="update">
    </form>
</body>
</html>