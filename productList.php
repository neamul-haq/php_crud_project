<?php
include 'connection.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="design.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Quicksand:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
<div class="contain ">
<h2 class='heading'>CRUD project</h2>
<p class='head'>19CSE034 || Neamul Haq</p>
<div class="main">
    <div class="flex">
        <div><h3 class="lekha">Add more item?</h3></div>
        <div class="buttons"><button class=""><a href="product.php" class="">Add product </a>
        </button></div>
    </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Item id</th>
      <th scope="col">Item Name</th>
      <th scope="col">Description</th>
      <th scope="col">Quantity(kg)</th>
      <th scope="col">Price</th>
      <th scope="col">Expire_date</th>
      <th scope="col">Edit/Delete</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $sql="Select * from `crud`";
    $result=mysqli_query($con,$sql);
    if($result){
    while($row=mysqli_fetch_assoc(($result))){
    $id=$row['id'];
    $name=$row['name'];
    $description=$row['description'];
    $quantity=$row['quantity'];
    $price=$row['price'];
    $expire_date=$row['expire_date'];
    echo '<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$name.'</td>
    <td>'.$description.'</td>
    <td>'.$quantity.'</td>
    <td>'.$price.'</td>
    <td>'.$expire_date.'</td>
    <td>
    <button class=""><a href="edit.php? editid='.$id.'" class="text-light"> Edit </a></button>
    <button class="btndlt"><a href="delete.php? deleteid='.$id.'" class="text-light"> Delete </a></button>
    </td>

    </tr>';
    }
}
    ?>

  </tbody>
</table>
</div>
</div>

</body>
</html>