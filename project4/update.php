
<?php session_start() ;
$_SESSION['id'] = $_GET['id'];
$_SESSION['name'] = $_GET['name'];
$_SESSION['price'] = $_GET['price'];
// var_dump($_GET);
// die;
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    
  <form action="database/update_product.php" method="POST" >
  
 <table>
    <tbody>
      
        <th>new name</th>
        <th>new price</th>
        <tr>
            <td><input type="text" name="name" ></td>
            <td><input type="text" name="price" ></td>
            <td><input type="submit" value="submit"></td>
        </tr>
      
    </tbody>
 </table>
 </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
