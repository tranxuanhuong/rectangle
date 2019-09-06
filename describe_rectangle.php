<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<form method="post">
    <input type="number" name="width" placeholder="Nhap chieu rong"/>
    <input type="number" name="height" placeholder="Nhap chieu dai"/>
    <input type="submit" value="Tinh" id="Submit"/>
</form>

<body>
<?php
include_once "rectangle.php";

?>
<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $width=$_POST["width"];
    $height=$_POST["height"];
    $rectangle=new Rectangle($width,$height);

    echo $rectangle->getArea();
    echo "<br>";
    echo $rectangle->getPermimeter();

}
?>


</body>
</html>

