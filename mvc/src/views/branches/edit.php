<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../update" method="post">
        <input type="text" value="<?= $branche['name']; ?>" name="name">
        <input type="hidden" value="<?= $branche['id']; ?>" name="id">

        <input type="submit">
    </form>
</body>
</html>