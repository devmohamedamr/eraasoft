<?php


namespace Eraasoft\Mvc\models;
use Eraasoft\Mvc\core\db;

class userModel extends db{
    public function getAllUsers(){
        return $this->select("users","*")->all(); 
    }
}