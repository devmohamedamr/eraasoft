<?php

namespace Eraasoft\Mvc\models;
use Eraasoft\Mvc\core\db;

class branchesModel extends db{
    public function getAllBranches(){
        return $this->select("branches","*")->all();
    }

    public function createNewBranch($data){
        return $this->insert("branches",$data)->excute();
    }

    public function deleteBranch($id){
        return $this->delete("branches")->where("id","=",$id)->excute();
    }

    public function getBranche($id){
        return $this->select("branches","*")->where("id","=",$id)->first();
    }

    public function udpateBranche($data,$id){
        return $this->update("branches",$data)->where("id","=",$id)->excute(); 
    }
}