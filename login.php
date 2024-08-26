<?php
session_start();

$_SESSION['test'] = "mohamed";




//    if($_SERVER['REQUEST_METHOD'] == "POST"){
//        $email = $_POST['email'];
//        $password = $_POST['password'];
//
//       $connection = mysqli_connect("localhost","root","","kimit");
//        $sql = "SELECT * FROM `users` WHERE `email` = '$email' and `password` = '$password'";
//       $query =  mysqli_query($connection,$sql);
//
//       $row = mysqli_fetch_assoc($query);
//       if(is_array($row)){
//
//        setcookie("login","success",time()+60*60*24,"/");
//
//       }else {
//           echo "try again";
//       }
//    }

?>
<!---->
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--    <form action="login.php" method="post">-->
<!--        <input type="text" name="email">-->
<!--        <input type="text" name="password">-->
<!--        <input type="submit" value="login">-->
<!--    </form>-->
<!--</body>-->
<!--</html>-->
