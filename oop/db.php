<?php


class db{

    public $connection;
    public $sql;
    public function __construct($server,$user,$pass,$db)
    {
        $this->connection = mysqli_connect($server,$user,$pass,$db);
    }
    public function select($table,$columns){
        $this->sql = "SELECT $columns FROM `$table`";
        return $this;
    }

    public function where($column,$operator,$value){
        $this->sql .= " WHERE `$column` $operator '$value'";
        return $this;
    }
    public function all(){
       $query =   mysqli_query($this->connection,$this->sql);
       return mysqli_fetch_all($query,MYSQLI_ASSOC);
    }

    public function first(){
        $query =   mysqli_query($this->connection,$this->sql);
        return mysqli_fetch_assoc($query);
    }
}

$db = new db('localhost','root','','eraasoftworkshop');
echo "<pre>";
print_r($db->select("user",'*')->first());






