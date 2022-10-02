<?php

namespace Eraasoft\Mvc\core;

class app{
    private $controller;
    private $method;
    public function __construct()
    {
        $this->url();
        $this->run();
    }
    private function url(){
        $url = $_SERVER['QUERY_STRING'];
        $url =  explode("/",$url);
        $this->controller = $url[0];
        $this->method = $url[1];
    }

    private function run(){
        $controller = "Eraasoft\\Mvc\\controllers\\".$this->controller;
        call_user_func_array([new  $controller,$this->method],[]);
    }
}