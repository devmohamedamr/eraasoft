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
                <th>update</th>
                <th>delete</th>
            </tr>
            <?php foreach($branches as $branche): ?>
                <tr>
                    <td><?= $branche['id']; ?></td>
                    <td><?= $branche['name']; ?></td>
                    <td><a href="update/<?= $branche['id']; ?>">update</a></td>
                    <td><a href="delete/<?= $branche['id']; ?>">delete</a></td>

                </tr>
            <?php endforeach; ?>
      </table>  
</body>
</html>