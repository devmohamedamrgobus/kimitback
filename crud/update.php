<?php
include 'lib.php';
session_start();
if(!isset($_SESSION['login'])){
    header('location: login.php');
}
if($_SESSION['login']['is_admin'] == 0){
    header('location: index.php');
}
$name = $_POST['name'];
$id = $_POST['id'];
$imgname = $_FILES['img']['name'];
$imgtmp = $_FILES['img']['tmp_name'];

move_uploaded_file($imgtmp,'img/'.$imgname);

$res = update($name,$imgname,$id);

if($res){
    header('location: index.php');
}