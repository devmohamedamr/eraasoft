<?php

namespace Eraasoft\Mvc\core;
trait BaseController{

    public function __call($name,$arg){
        echo "method :".$name." not found";
    }
    public function view($path,$data = []){

        extract($data);
        
        include "../src/views/".$path.".php";
    }
}