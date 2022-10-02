<?php
include "dbcontract.php";
class pdodb implements dbcontract{
    public function insert()
    {
        echo "insert pdo";  
    }
    public function update()
    {
        echo "update pdo";  

    }

    public function delete()
    {
        echo "delete pdo";  

    }

    public function select()
    {
        echo "select pdo";  

    }
}