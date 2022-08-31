<?php


function createNewUsere($name,$email,$password){
    $file = fopen("users.csv","a+");

    fputcsv($file,[ $name,$email,$password]);

}


function allUsers(){
    $file = fopen("users.csv","a+");
    $users = []; 
    while($user =  fgetcsv($file)){
        $users[] = $user;
    }
    return $users;
}




function checkEmailAndPassword($email,$password){
    $file = fopen("users.csv","a+");
    $users = []; 
    while($user =  fgetcsv($file)){
        if($email == $user[1] && $password == $user[2]){
            return true;
        }
    }
    return false;
}