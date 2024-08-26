<?php


if($_SERVER['REQUEST_METHOD'] == "POST"){
    $title = $_POST['title'];
    $description = $_POST['description'];

    $imgname = $_FILES['img']['name'];
    $imgtmp = $_FILES['img']['tmp_name'];

    move_uploaded_file($imgtmp,$imgname);

    $connection = mysqli_connect("localhost",'root',"","kimit");
    $sql = "INSERT INTO `service` (`title`,`description`,`img`) VALUES  ('$title','$description','$imgname')";
    mysqli_query($connection,$sql);
    if(mysqli_affected_rows($connection)){
        echo "service created";
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
    <form action="create_service.php" method="post" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="title">
        <textarea name="description" placeholder="description"></textarea>
        <input type="file" name="img">
        <input type="submit" value="save">
    </form>
</body>
</html>
