<?php


function  connection()
{
  return  mysqli_connect('localhost','root','','kimit');
}



function create($name,$img){
    $con = connection();
    mysqli_query($con,"INSERT INTO `categories` (`name`,`img`) VALUES ('$name','$img')");
   return mysqli_affected_rows($con);
}


function update($name,$img,$id){
    $con = connection();
    mysqli_query($con,"UPDATE `categories` SET `name` = '$name' ,`img` = '$img'  where `id` = $id");
    return mysqli_affected_rows($con);
}


function delete($id){
    $con = connection();
    mysqli_query($con,"DELETE FROM `categories` where `id` = $id");
    return mysqli_affected_rows($con);
}


function select(){
    $con = connection();
    $query =  mysqli_query($con,"SELECT * FROM `categories`");
    return mysqli_fetch_all($query,MYSQLI_ASSOC);
}

function get($id){
    $con = connection();
    $query =  mysqli_query($con,"SELECT * FROM `categories` where `id` = $id");
    return mysqli_fetch_assoc($query);
}


function login($email,$password){
    $con = connection();
    $query =  mysqli_query($con,"SELECT * FROM `users` where `email` = '$email' and `password` = '$password'");
    return mysqli_fetch_assoc($query);
}