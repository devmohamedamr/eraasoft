<?php





echo "<pre>";
//print_r($_FILES);
//
//$name = $_POST['name'];
//$tmp = $_FILES['img']['tmp_name'];
//$type = $_FILES['img']['type'];
//
//$ext = explode("/",$type);
//
//move_uploaded_file($tmp,$name.".".$ext[1]);

//print_r($_FILES);die;

//for($i=0;$i<count($_FILES['img']['name']);$i++){
//    move_uploaded_file($_FILES['img']['tmp_name'][$i],"upload/".$_FILES['img']['name'][$i]);
//}


$list_of_students =  explode(",",$_POST['students']);


for($i=0;$i<count($list_of_students);$i++){
    fopen($list_of_students[$i].".html","w");
}


//print_r($list_of_students);
//for(){
//
//}


