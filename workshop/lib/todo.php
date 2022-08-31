<?php

include "connection.php";


function addTodo($title,$body,$img,$user_id){
    $connection = connection();
    mysqli_query($connection,"INSERT INTO `todos` (`task`,`body`,`img`,`user_id`) VALUES ('$title','$body','$img',$user_id)");
    return mysqli_affected_rows($connection);
}



function todos($user_id){
    $connection = connection();
    $res =  mysqli_query($connection,"SELECT * FROM `todos` WHERE `user_id` = $user_id");
    return mysqli_fetch_all($res,MYSQLI_ASSOC);
}


function done($todo_id){
    $connection = connection();
    $res =  mysqli_query($connection,"SELECT * FROM `todos` WHERE `id` = $todo_id");
    $todo_row =  mysqli_fetch_assoc($res);
    if($todo_row['status'] == 1){
    $res =  mysqli_query($connection,"UPDATE `todos` SET `status` = 0 WHERE `id` = $todo_id");
    }else{
        $res =  mysqli_query($connection,"UPDATE `todos` SET `status` = 1 WHERE `id` = $todo_id");
    }
    return mysqli_affected_rows($connection);

}


function delete($id){
    $connection = connection();
     mysqli_query($connection, "DELETE FROM `todos` WHERE `id` = $id");
    return mysqli_affected_rows($connection);

}



function getTodoById($id){
    $connection = connection();
    $res = mysqli_query($connection, "SELECT * FROM `todos` WHERE `id` = $id");
   return mysqli_fetch_assoc($res);
}


function updateTodo($task,$body,$img,$id){
   
    $connection = connection();
    if(!empty($img)){
        $extra = ", `img` = '$img'";

    }else{
        $extra = "";
    }
    // echo "UPDATE `todos` SET `task= '$task' , `body` = '$body' , `img` = '$img'  WHERE `id` = $id";die;
     mysqli_query($connection, "UPDATE `todos` SET `task`= '$task' , `body` = '$body' $extra  WHERE `id` = $id");
    return mysqli_affected_rows($connection);

}