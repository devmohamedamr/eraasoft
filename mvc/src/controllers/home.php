<?php

namespace Eraasoft\Mvc\controllers;
use Eraasoft\Mvc\core\BaseController;
class home {
    use BaseController;
    public function index(){
        echo "home index";
        // $this->view("index");
    }

    public function error(){
        echo "not found";
    }
}