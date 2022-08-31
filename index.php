<?php



//$emaildb = "e@e.com";
//$passdb = 123;
//
//
//
//
//$userInputEmail = "ew@e.com";
//$userInputPassword = 123;
//
//
//if($userInputEmail == $emaildb  AND $userInputPassword == $passdb){
//    echo "welcome ya mohamed";
//}else{
//    echo "plz try again";
//}






// 90 , 92 , 80
$oil =  100;
$l = 20;

//if($oil == 90){
//    echo $l *3;
//}elseif($oil == 92){
//    echo $l *4;
//}elseif($oil == 80){
//    echo $l *2;
//}else{
//    echo "oil not found";
//}

//switch ($oil){
//    case 90:
//        echo $l *3;
//    break;
//    case 80:
//        echo $l *2;
//    break;
//    case 92 :
//        echo $l * 4;
//   break;
//    default :
//        echo "not found";
//}





//
//for(1>10){
//
//}



//$i = 1;
//while ($i<10){
//    $i++;
//    echo "mohamed ";
//}



//$i = 1;
//while ($i<=14){
//
//    if($i == 12){
//        echo "mohamed amr ";
//    }else{
//        echo $i." ";
//    }
//    $i++;
//}

//$n = 20;
//$i = 1;
//$arr = [];
//while ($i<=$n){
//    if($i%3 == 0 && $i%5 == 0){
//        $arr[$i] = "fizzbuzz";
//    }elseif($i%5 == 0){
//        $arr[$i] = "buzz";
//    }elseif($i%3 == 0){
//        $arr[$i] = "fizz";
//    }
//    else{
//        $arr[$i] = $i;
//    }
//    $i++;
//}

//echo "<pre>";
//print_r($arr);



//
//$arr = [2,11,7,15];
//$t = 9;
//
//$e1 = 0;
//$e2 = 1;
//$res = [];
//$i=0;
//while ($i<count($arr)){
//
//    if($arr[$e1] + $arr[$e2] == $t){
//        $res =  [$e1,$e2];
//    }
//    $e1++;
//    $e2++;
//    $i++;
//}


//print_r($res);

//$res = [];
//$i=0;
//while ($i<count($arr)){
//    $j= $i+1;
//    while ($j<count($arr)){
//        if($arr[$i] + $arr[$j] == $t){
//            $res = [$i,$j];
//        }
//        $j++;
//    }
//    $i++;
//}



//print_r($res);






$a = [2,23,12,213];
//$i=0;
//$count = count($a);
//while($i<$count){
//
//    echo $a[$i];
//
//    $i++;
//}



//for($i=0;$i<count($a);$i++){
//    echo $a[$i]." ";
//}



//$i=0;
//$count = count($a);//4
//do{
//
//    echo $a[$i];
//
//    $i++;
//}while($i<$count);


$user = ["name"=>"mohamed","email"=>"mo@m.com"];

//$keys = array_keys($user);
//for($i=0;$i<count($user);$i++){
//    echo $user[$keys[$i]]." ".$keys[$i];
//}

//foreach ($user as $v){
//    echo $v;
//}


$users = [
    [
        "name"=>"mohamed",
        "age"=>20,
        "skills"=>["html","css"]
    ],
    [
        "name"=>"ahmed",
        "age"=>24,
        "skills"=>["php","oop"]
    ],
    [
        "name"=>"eslam",
        "age"=>40,
        "skills"=>["laravel","js"]
    ]

];



// name : mohamed
// age : 22
// skills : html,css
// ------------------
// name : mohamed
// age : 22
// skills : html,css
// ------------------
// name : mohamed
// age : 22
// skills : html,css
// ------------------
//
//echo "<pre>";
//print_r($users);
//
//foreach ($users as $user){
//    foreach ($user as $key => $value) {
//        if(is_array($value)){
//          echo $key .":". implode(",",$value);
//        }else{
//            echo  $key . ' : '.$value."<br>";
//        }
//    }
//    echo  "<hr>";
//}





// 123.434.45

// 123/434/45

//$str = "123.434.45";
//
//for($i=0;$i<strlen($str);$i++){
//    if($str[$i] == "."){
//        $str[$i] = "/";
//    }
//}
//
//echo $str;


//function sum($x,$y){
//    return $x + $y;
//}
//
//$num1 = 10;
//$num2 = 20;
//echo sum($num1,$num2);






$s = [20,30,40];

//echo array_shift($s);
//echo array_shift($s);
//echo array_shift($s);
//print_r($s);
//for(;$i=array_shift($s);){
//    echo $i;
//}
//
//
//while($i=array_shift($s)){
//    echo $i;
//}





//$s = ["m","o","h","a","m","e","d"];
//echo "<table border='1'>";
//for($row=1;$row<=8;$row++){
//    echo "<tr>";
//    for($column=1;$column<=8;$column++){
//        $color = $column + $row;
//        if($color%2 ==1){
//            echo "<td bgcolor='white' height='20' width='20'>$color</td>";
//        }else{
//            echo "<td bgcolor='black' height='20' width='20'>$color</td>";
//        }
//    }
//    echo "</tr>";
//}
//echo "</table>";







//$numbers  = [20,39,44];
//array_pop($numbers);
//print_r($numbers);
//while($n = array_pop($numbers)){
//    echo  $n;
//}





//function inc(&$n){
//    echo ++$n;
//}
//
//
//
//$x=10;
//
//inc($x); //11
//echo "<hr>";
//echo $x; //10






// post


//print_r($_POST);


//if($_POST["age"] >= 50){
//    echo "age > 50";
//}else{
//    echo "age > 50";
//}



//
//$email = "w@2.com";
//$pass = "222";
//
//$error = [];
//
//if(isset($_POST['email'])){
//
//    if($_POST['email'] == ""){
//        $error[] = "email is required";
//    }
//
//
//    if($_POST['password'] == ""){
//        $error[] = "password is required";
//    }
//
//
//    if(count($error) == 0){
//        if($_POST['email'] == $email && $_POST['password'] == $pass){
//            echo "welcome";
//        }else{
//            echo "plz try again";
//        }
//    }
//}
//
//echo "<ul>";
//foreach ($error as $item) {
//    echo "<li style='color:red'>$item</li>";
//}
//
//echo "</ul>";


//session_start();



//print_r($_REQUEST);


//$name = "mohamed";


//print_r($_SESSION);


//$_COOKIE['']




setcookie('login','mohamed',time() + (60 * 60 *24) , "/");

//print_r($_COOKIE);





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="index.php?x=20" method="post">
    <input type="text" name="x">
    <input type="text" name="y">
    <input type="submit" >
</form>
</body>
</html>





