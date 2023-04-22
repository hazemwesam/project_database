<?php
$name = $_POST['name'];
$price = $_POST['price'];
$cat_id = $_POST['cat_id'];

$c= mysqli_connect("localhost","root","","ECOMMERCE");
if(!$c)
{
    echo "faild:". mysqli_connect_error();
}
$sql = "INSERT INTO `products` (`name`,`price`,`cat_id`) VALUES ('$name','$price','$cat_id') ";
mysqli_query($c,$sql);
header("location: ../products.php");

?>