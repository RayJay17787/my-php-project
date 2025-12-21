<?php 
    $conn = mysqli_connect('localhost','root','','gaming_store');

    $id = $_POST['id'];

    $name = $_POST['discname'];
    $company = $_POST['company'];
    $platform = $_POST['platform'];
    $genre = $_POST['genre'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $image = $_POST['image'];

    $query = "UPDATE products
              SET name = '$name', 
              company = '$company', 
              platform = '$platform', 
              genre = '$genre', 
              price = '$price', 
              stock = '$stock', 
              image = '$image' WHERE id = $id";

    mysqli_query($conn,$query);

    header("Location: ps5discs.php");
    exit();
?>