

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
            <th scope="col">price</th>
            <th scope="col">Action</th>
            
            <th>
              <form action="../categories.php">
                <input type="submit" value="categories">
              </form>
            </th>
            
          </tr>
        </thead>

        <tbody>
          <?php
          $i = 1;
    $con = mysqli_connect("localhost","root","","ECOMMERCE");
    if(!$con)
    {
        echo "failed: ". mysqli_connect_error();
    }
    $id = $_GET['id'];
    $sql ="SELECT * FROM `products`  WHERE `cat_id`= $id ORDER BY `cat_id` ASC";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result)): ?>
  <tr>
    <td><?php echo $i++;  ?></td>
    <td><?php echo $row["name"]  ?></td>
    <td><?php echo $row["price"]  ?></td>
      <!-- <td><input type="button" value="insert"></td> -->

    <td>
    <a href="../update.php?id=<?php echo $row['id'];?>&name=<?php echo $row['name']; ?>&price=<?php echo $row['price']; ?>" class="btn btn-success" >update</a>  
    <a href="delete_product.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" >delete</a>  
</td>
  </tr>
  <?php endwhile;?>
        </tbody>

      </table>
      </table>
   
</body>
</html>