<?php
include 'lib.php';
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = login($email,$password);

    if(is_array($user)){
        $_SESSION['login'] = $user;
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
    <form action="login.php" method="post">
        <input type="email" name="email">
        <input type="password" name="password">
        <input type="submit" value="login">
    </form>
</body>
</html>
