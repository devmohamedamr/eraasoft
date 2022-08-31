<?php
//session_start();
//$_SESSION['name'] = "ahmed";
//
//
$errors = [];
if(isset($_POST['email'])){

    setcookie("name",$_POST['name'],time() + 60*60,"/");
    setcookie("email",$_POST['email'],time() +  60*60,"/");
    setcookie("password",$_POST['password'],time() + 60*60,"/");
    setcookie("address",$_POST['address'],time() + 60*60,"/");

    if($_POST['name'] == ''){
        $errors[] = "name is must";
    }

    print_r($errors);
}

?>

<form action="home.php" method="post">
    <input type="text" name="name" value="<?php if(isset($_COOKIE['name'])){echo$_COOKIE['name']; } ?>">
    <input type="text" name="email" value="<?php if(isset($_COOKIE['email'])){echo$_COOKIE['email']; } ?>">
    <input type="text" name="password" value="<?php if(isset($_COOKIE['password'])){echo$_COOKIE['password']; } ?>">
    <input type="text" name="address" value="<?php if(isset($_COOKIE['address'])){echo$_COOKIE['address']; } ?>">
    <input type="submit">
</form>
