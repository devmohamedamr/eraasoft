<?php

namespace Eraasoft\Mvc\controllers;
use Eraasoft\Mvc\core\BaseController;
use Eraasoft\Mvc\models\userModel;

class User {
    use BaseController;
    public function index(){
        $usermodel = new userModel;
        $users =  $usermodel->getAllUsers();

        $this->view("index",['y'=>$users]);
    }

    public function create(){
        echo "create";
    }
}