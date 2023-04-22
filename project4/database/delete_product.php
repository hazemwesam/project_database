<?php
$id = $_GET['id'];
$con = mysqli_connect("localhost","root","","ECOMMERCE");
$sql = "DELETE FROM `products` WHERE `id`= $id";
    $result = mysqli_query($con,$sql);

    header("location:../products.php");




