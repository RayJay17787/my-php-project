<?php
    session_start();

    $conn = mysqli_connect('localhost', 'root', '', 'gaming_store');

    $customer_id = $_SESSION['customer']['id'];
    $id = $_POST['product_id'];
    $total_amound = $_POST['total_amount'];
    $shipping_address = $_POST['customer_address'];
    $product = $_POST['product'];
    $order_date = date('Y-m-d');

    $query = "INSERT INTO orders (customer_id, total_amount, shipping_address, order_date) VALUES ($customer_id, $total_amound, '$shipping_address', '$order_date')";

    $result = mysqli_query($conn, $query);

    header("Location: product_info.php?id=$id");
?>