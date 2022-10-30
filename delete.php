<?php
include 'connection.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from `crud` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:productList.php');
    }else{
        die("Connection failed: " . $con->connect_error);
    }
}
?>