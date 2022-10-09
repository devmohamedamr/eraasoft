<?php

namespace Eraasoft\Mvc\core;

class app{
    private $controller;
    private $method;
    private $params;
    public function __construct()
    {
        $this->url();
        $this->run();
    }
    private function url(){
        $url = $_SERVER['QUERY_STRING'];
        $url =  explode("/",$url);
        $this->controller = (empty($url[0])) ? "home" : $url[0];
        $this->method = (empty($url[1])) ? "index" : $url[1];
        unset($url[0],$url[1]);
        $this->params = $url;

    }

    private function run(){
        $controller = "Eraasoft\\Mvc\\controllers\\".$this->controller;
        if(class_exists($controller)){
            call_user_func_array([new  $controller,$this->method], $this->params);
        }else{
            $controller = "Eraasoft\\Mvc\\controllers\\home";
            call_user_func_array([new $controller,"error"],[]);

        }
    }
}