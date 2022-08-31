<?php


function listGenerator($string){
    return explode(",",$string);
}
function getContent($path){
    return file_get_contents($path);
}
function createFile($filename){
     fopen($filename,"w");
}

function replace($keys,$values,$file){
    return str_replace($keys,$values,$file);
}
function contentPush($content,$file){
    file_put_contents($file,$content);
}


function call($students,$courses,$path){
    $list_of_students =  listGenerator($students);
    $list_of_courses =  listGenerator($courses);
    $content =  getContent($path);

    for($i=0;$i<count($list_of_courses);$i++){
        createFile($list_of_students[$i].".html");
        $newContent =  replace(["name","course"],[$list_of_students[$i],$list_of_courses[$i]], $content);
        contentPush($newContent,$list_of_students[$i].".html");
    }
}
