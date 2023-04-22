<?php
// $sql = "SELECT COUNT(cat_id) FROM `products` WHERE `cat_id` = "


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/all.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body >
    <table class="table" style="font-size: 28px;">

        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            
            <th>
            <a href="products.php" class="btn btn-success" >Products</a>
            </th>
            <th>
              <a href="index.php" class="btn btn-success" >Home</a>
            </th>
  
          </tr>
        </thead>

        <tbody>
          <?php
    $con = mysqli_connect("localhost","root","","ECOMMERCE");
    if(!$con)
    {
        echo "failed: ". mysqli_connect_error();
    }
    
    $sql ="SELECT * FROM `category`";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result)): ?>
  <tr>
    <td><?php echo $row["id"]  ?></td>
    <td><?php echo $row["name"]  ?></td>
    <td>
    <a href="database/cat_product.php?id=<?php echo $row['id'];?>" class="btn btn-success" >select</a>
    </td>
    
  </tr>
  <?php endwhile;?>
        </tbody>

      </table>
      </table>
    
 


      


</body>
</html>