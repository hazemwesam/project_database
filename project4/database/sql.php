<?php

$con = mysqli_connect("localhost","root","");
if(!$con)
{
    echo "failed: ". mysqli_connect_error();
}

$sql ="CREATE DATABASE IF NOT EXISTS `ECOMMERCE` ";
$result = mysqli_query($con,$sql);
$con = mysqli_connect("localhost","root","","ECOMMERCE");
$sql = "CREATE TABLE IF NOT EXISTS `category`(
    `id`  INT PRIMARY KEY NOT NULL,
    `name` VARCHAR(20)
    )";
    $result = mysqli_query($con,$sql);

    $sql = "INSERT INTO `category`(`id`,`name`) values (10,'chaires')";
    $result = mysqli_query($con,$sql);
    $sql = "INSERT INTO `category`(`id`,`name`) values (20,'beds')";
    $result = mysqli_query($con,$sql);
    $sql = "INSERT INTO `category`(`id`,`name`) values (30,'offices')";
    $result = mysqli_query($con,$sql);


    $sql = "CREATE TABLE IF NOT EXISTS `products`(
        `id`  INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
        `name` VARCHAR(20),
        `price` FLOAT ,
        `cat_id` INT NOT NULL,
        FOREIGN KEY (`cat_id`) REFERENCES category(id)
        )";
        $result = mysqli_query($con,$sql);

 $sql = "INSERT INTO `products`(`name`,`price`,`cat_id`) values ('chair1',55,10)";
 $result = mysqli_query($con,$sql);
 $sql = "INSERT INTO `products`(`name`,`price`,`cat_id`) values ('chair2',75,10)";
 $result = mysqli_query($con,$sql);
 $sql = "INSERT INTO `products`(`name`,`price`,`cat_id`) values ('chair3',65,10)";
 $result = mysqli_query($con,$sql);
 $sql = "INSERT INTO `products`(`name`,`price`,`cat_id`) values ('bed1',150,20)";
 $result = mysqli_query($con,$sql);
 $sql = "INSERT INTO `products`(`name`,`price`,`cat_id`) values ('bed2',200,20)";
 $result = mysqli_query($con,$sql);
 $sql = "INSERT INTO `products`(`name`,`price`,`cat_id`) values ('bed3',300,20)";
 $result = mysqli_query($con,$sql);
 $sql = "INSERT INTO `products`(`name`,`price`,`cat_id`) values ('office1',100,30)";
 $result = mysqli_query($con,$sql);
 $sql = "INSERT INTO `products`(`name`,`price`,`cat_id`) values ('office2',150,30)";
 $result = mysqli_query($con,$sql);
 $sql = "INSERT INTO `products`(`name`,`price`,`cat_id`) values ('office3',120,30)";
 $result = mysqli_query($con,$sql);






  header("location: ../index.php");
  