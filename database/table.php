<?php

$connect =  mysqli_connect("localhost","root","","egybest");


$query = mysqli_query($connect,"SELECT * FROM `category`");


$data =  mysqli_fetch_all($query,MYSQLI_ASSOC);


echo "<pre>";
print_r($data );die;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <table border="1">
            <tr>
                <th>id</th>
                <th>name</th>
            </tr>
            <?php foreach($data as $row): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['name'] ?></td>
            </tr>
            <?php endforeach; ?>
     </table>   
</body>
</html>