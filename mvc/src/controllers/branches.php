<?php

namespace Eraasoft\Mvc\controllers;
use Eraasoft\Mvc\core\BaseController;
use Eraasoft\Mvc\models\branchesModel;

class branches{
    use BaseController;
    private $model;
    public function __construct()
    {
        $this->model =   new branchesModel;  
    }
    public function index(){

        $branches =  $this->model->getAllBranches();
         return $this->view("branches/index",["branches"=>$branches]);
    }

    public function create(){
        return $this->view("branches/create");
    }

    public function store(){

        $this->model->createNewBranch($_POST);
        header("location: index");
    }

    public function edit($id){

    }

    public function update(){

    }

    public function delete($id){
        $this->model->deleteBranch($id);
        header("location: ../index");

    }
}