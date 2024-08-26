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

delete($id);

header('location: index.php');