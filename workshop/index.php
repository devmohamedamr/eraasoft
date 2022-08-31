<?php
session_start();
include "lib/todo.php";
if(empty($_SESSION['login'])){
    header("LOCATION: login.php");
}

$list_of_todos =  todos($_SESSION['login']['id']);

// print_r($list_of_todos);die;

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
    <table border="1">
        <tr>
            <th>#</th>
            <th>title</th>
            <th>body</th>
            <th>img</th>
            <th>done</th>
            <th>update</th>
            <th>delete</th>
        </tr>
        <?php foreach($list_of_todos as $todo): ?>
            <?php if($todo['status'] == 1): ?>
                <tr style="background-color: red;">
            <?php else: ?>
                <tr>
            <?php endif; ?>    
                <td><?= $todo['id']; ?></td>
                <td><?= $todo['task']; ?></td>
                <td><?= $todo['body']; ?></td>
                <td><img width="100px" height="100px" src="upload/<?= $todo['img']; ?>"></td>
                <td><a href="donetodo.php?id=<?= $todo['id']; ?>">done</a></td>
                <td><a href="edittodo.php?id=<?= $todo['id']; ?>">edit</a></td>
                <td><a href="deletetodo.php?id=<?= $todo['id']; ?>">delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>