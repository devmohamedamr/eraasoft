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
            <th>name</th>
            <th>email</th>
            <th>passowrd</th>
        </tr>
        <?php foreach(allUsers() as $user): ?>
        <tr>
            <td><?= $user[0]; ?></td>
            <td><?= $user[1]; ?></td>
            <td><?= $user[2]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>