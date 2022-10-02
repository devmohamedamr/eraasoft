<?php


// $connection =  mysqli_connect("localhost","root","","eraasoft");


// mysqli_query($connection,);



// class test{
//    function go(){
//         echo "go";
//    } 

//    function stop(){
//     echo "stop";
//    }
// }


// $test1 = new test;

// $test1->stop();

// print_r($test1);





// $mysql = new mysqli("localhost","root","","eraasoftworkshop");

// $mysql->query("INSERT INTO `todos`( `task`, `body`, `img`, `status`, `user_id`) VALUES ('awdawd','awdadaw',1,4)");

// echo $mysql->affected_rows;















// class calc{

//     public $x;
//     public $y;

//     function add(){
//         echo $this->x + $this->y;
//     }
//     function mult(){
//         echo $this->x * $this->y;
//     }
//     function div(){
//         echo $this->x / $this->y;
//     }
//     function sub(){
//         echo $this->x - $this->y;
//     }
// }


// $c = new calc;
// $c->x = 10;
// $c->y = 10;
// $c->add();
// echo "<hr>";
// $c->mult();




// class test{
//     public $color;

//     function getcolor(){
//         echo $this->color;
//     }
// }

// // -----------------------------


// $t = new test;
// $t->color = "green";
// $t->getcolor();


// echo "<hr>";



// $c = new test;
// $c->color = "red";
// $c->getcolor();


// echo "<hr>";


// $b = new test;
// $b->color = "blue";
// $b->getcolor();




// class car{
//     // private $name;
//     private $password;

//     public function setPassword($x){
//         $this->password = sha1($x);
//     }

//     public function getPassword(){
//         return $this->password;
//     }
// }

// $c = new car;
// $c->setPassword(1234);
// echo $c->getPassword();
// // car::$color = "red";
// // car::go();
// // $car = new car('w');
// // $car->stop();













// // class bmw extends car{
// //     function testbm(){
// //         $this->stop();
// //     }
// // }

// // $bmw = new bmw;
// // $bmw->stop();









// include "db/mysqlidb.php";


// $db = new mysqlidb;
// $db->select();




// public , protected , private

















// abstract class person{

//     abstract function go();

//     abstract function stop(); 
// }

// class test extends person{

// }

















// interface intone{
//     public function i();
// }


// interface inttwo{
//     public function i();
// }


// class test implements inttwo,intone{
//     public function i(){
//         echo "awdawd";
//     }

// }

// $t = new test;
// $t->i();




// $export = new export($data,"pdf");
// $export->print();




class test{
    // public function __construct()
    // {
    //     echo "test class";
    // }
  
    // public function __destruct()
    // {
    //     echo "end";
    // }
  

    // private function hi(){
    //     echo "ww";
    // }


    // public function add($x,$y){
    //     echo $x+$y;
    // }
    // public function add($x,$y,$c){
    //     echo $x+$y+$c;
    // }

    //   public function __call($method,$params){
    //     if($method == "add"){
    //         if(count($params) == 2){
    //            echo  $params[0] + $params[1];  
    //         }elseif(count($params) == 3){
    //             echo  $params[0] + $params[1] + $params[2];  

    //         }
    //     }
        
    // }
    // private $connection = "test";

    // public function __set($name,$value){
    //     if($name == "connection"){
    //         $this->connection = $value;
    //     }
    // }

    // public function __get($name)
    // {
    //     if($name == "connection"){
    //         return  $this->connection;
    //     }
    // }
}



// $t = new test;
// // $t->add(10,20,20);
// $t->connection = "wdad";
// echo $t->connection;





// class bmw extends car{
 
//     public function move(){
//         parent::move();
//         echo "bmw move";
//     }
// }
// $bm = new bmw;
// $bm->move();
// car::move();

// trait engin{
//     public function e(){

//     }
// }

// trait body{
//  public function e(){
        
//     }
// }


// class car {

//     use engin,body;

//     public function move(){
//         echo "car move";
//     }
// }


// $c = new car;
// $c->e();



// spl_autoload_register(function($class){
//     if(file_exists($class.".php")){
//         include $class.".php";
//     }elseif(file_exists("db/".$class.".php")){
//         include "db/".$class.".php";
//     }elseif(file_exists("model/".$class.".php")){
//         include "model/".$class.".php";
//     }
// });

// $db = new db("localhost","root","","odccrud");
// $mysql = new mysqlidb;

// include "db/db.php";
// use mohamed\database\db as dbmohamed;
// class db{
//     public function insert(){
//         echo "insert";
//     }
// }

// $db = new dbmohamed("localhost","root","","odccrud");