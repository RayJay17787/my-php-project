<?php
    session_start();
    $conn = mysqli_connect('localhost','root','','gaming_store');

    $id = $_GET['id'];

    $customer = $_SESSION['customer'];

    $user_query = "SELECT * FROM customers WHERE id = $id";
    
    $product_query = "SELECT * FROM products WHERE id = $id";

    $user_data = mysqli_query($conn, $user_query);
    $product_data = mysqli_query($conn, $product_query);

    $total_product = mysqli_fetch_assoc($product_data);
    $total_user = mysqli_fetch_assoc($user_data);

?>