<?php
$c= mysqli_connect("localhost","root","","ECOMMERCE");
if(!$c)
{
    echo "faild:". mysqli_connect_error();
}
mysqli_query($c,"DROP DATABASE `ECOMMERCE`");
header("location: index.php");

?>