<?php
include 'connection.php';

if(isset($_POST['add'])){
    $name=$_POST['name'];
    $description=$_POST['description'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $expire_date=$_POST['expire_date'];
    $sql="insert into crud (name,description,quantity,price,expire_date)
    values('$name','$description', '$quantity' , '$price', '$expire_date')";
    $result = mysqli_query($con,$sql);
    if($result){
        //echo "Data inserted successfully";
        header('location:productList.php');
    }else{
        die("Connection failed: " . $conn->connect_error);
    }
}

?>







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="design.css">

    <title>PHP Crud Operations</title>
  </head>
  <body>
    <div class="container header">
        <h2>Add new product? </h2>
    </div>
    <div class="container my-5">
        <form method="POST" class='grid'>
            <div class="form-group">
                <label  class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name">
            </div>
            <div class="form-group">
                <label  class="form-label">Description</label>
                <input type="text" class="form-control" placeholder="Give Description" name="description">
            </div>
            <div class="form-group">
                <label  class="form-label">Quantity(kg)</label>
                <input type="number" class="form-control" placeholder="Enter the quantity" name="quantity">
            </div>
            <div class="form-group">
                <label  class="form-label">Price</label>
                <input type="text" class="form-control" placeholder="Enter amount" name="price">
            </div>
            <div class="form-group">
                <label  class="form-label">Expire_date</label>
                <input type="date" class="form-control" name="expire_date">
            </div>
            <div class="addbtn" ><button type="add" class="b" name="add">Add</button></div>
        </form>
    </div>

  </body>
</html>