<?php

namespace Eraasoft\Mvc\controllers;
use Eraasoft\Mvc\core\BaseController;
class User {
    use BaseController;
    public function index(){
        $this->view("index");
    }

    public function create(){
        echo "create";
    }
}