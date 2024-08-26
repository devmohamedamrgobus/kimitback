<?php
include "lib.php";
session_start();
if(!isset($_SESSION['login'])){
    header('location: login.php');
}
if($_SESSION['login']['is_admin'] == 0){
    header('location: index.php');
}
$id = $_GET['id'];


$row = get($id);


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
<form action="update.php" method="post" enctype="multipart/form-data">
    <input type="text" value="<?= $row['name'] ?>" name="name">
    <img width="50px" height="50px"  src="img/<?= $row['img'] ?>">
    <input type="file" name="img">
    <input type="hidden" value="<?= $row['id'] ?>" name="id">
    <input type="submit" value="update">
</form>
</body>
</html>
