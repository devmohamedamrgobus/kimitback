<?php
include "lib.php";
session_start();
if(!isset($_SESSION['login'])){
    header('location: login.php');
}

if($_SESSION['login']['is_admin'] == 0){
    header('location: index.php');
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $imgname = $_FILES['img']['name'];
    $imgtmp = $_FILES['img']['tmp_name'];

    move_uploaded_file($imgtmp,'img/'.$imgname);

    $res = create($name,$imgname);

    if($res){
        header('location: index.php');
    }
}
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
    <form action="create.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name">
        <input type="file" name="img">
        <input type="submit" value="save">
    </form>
</body>
</html>
