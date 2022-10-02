<?php

namespace Eraasoft\Mvc\core;
trait BaseController{
    public function view($path){
        include "../src/views/".$path.".php";
    }
}