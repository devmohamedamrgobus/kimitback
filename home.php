<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    foreach($_FILES['img']['name'] as $key => $value){
        move_uploaded_file($_FILES['img']['tmp_name'][$key],"img/".$_FILES['img']['name'][$key]);
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
</head>
<body>
    <form action="home.php" method="post" enctype="multipart/form-data">
        <input type="file" name="img[]" multiple>
        <input type="text" name="name">
        <input type="submit" value="send">
    </form>
</body>
</html>
