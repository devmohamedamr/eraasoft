
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="login.php" method="post">
    <input type="text" name="email">
    <input type="text" name="password">
    <input type="submit">
</form>
</body>
</html>

<?php

$email = "mohamed@m.com";
$password = 123;
$errors = [];
if(isset($_POST['email'])){
    if($_POST['email'] == ''){
        $errors[] = "email is required";
    }

    if($_POST['password'] == ''){
        $errors[] = "password is required";
    }


    if(count($errors) == 0){
        if($_POST['email'] == $email && $_POST['password'] == $password){
//            $_SESSION['login'] = "mohamed";
            setcookie("login","mohamed",time() + 60 * 60 * 24,"/");
            header("location: home.php");
        }
    }else{
        print_r($errors);
    }
}

?>
