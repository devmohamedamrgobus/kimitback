<?php
session_start();
if(!isset($_SESSION['login'])){
    header('location: login.php');
}
include "lib.php";
$data =  select();






?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
<?php if($_SESSION['login']['is_admin'] == 1): ?>

    <a href="create.php">create new category</a>
<?php endif; ?>
    <a href="logout.php">logout</a>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>img</th>
            <?php if($_SESSION['login']['is_admin'] == 1): ?>

            <th>update</th>
            <th>delete</th>
            <?php endif; ?>
        </tr>
        <?php foreach ($data as $category): ?>
        <tr>
            <td><?= $category['id'] ?></td>
            <td><?= $category['name'] ?></td>
            <td><img width="50px" height="50px" src="img/<?= $category['img'] ?>"></td>
            <?php if($_SESSION['login']['is_admin'] == 1): ?>
            <td><a href="edit.php?id=<?= $category['id'] ?>">update</a></td>
            <td><a href="delete.php?id=<?= $category['id'] ?>">delete</a></td>
            <?php endif; ?>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

