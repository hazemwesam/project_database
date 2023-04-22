<?php
session_start();

$id =  $_SESSION['id'];
$name = $_SESSION['name'];
$price = $_SESSION['price'];
// var_dump($_SESSION);
// echo $id;   
// die;
if(!$_POST["name"])
{
    $new_name = $name;
}
else
{
    $new_name = $_POST['name'];
}

if(!$_POST["price"])
{
    $new_price = $price;
}
else
{
    $new_price = $_POST['price'];
}
// var_dump($_POST);
// die;
// echo $new_name;

$con = mysqli_connect("localhost","root","","ECOMMERCE");
$sql = "UPDATE `products` SET `name`= '$new_name' , `price`= $new_price  where `id` = $id ";
    $result = mysqli_query($con,$sql);

    header("location:../products.php");














