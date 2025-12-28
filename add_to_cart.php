<?php
    session_start();
    $conn = mysqli_connect('localhost', 'root', '', 'gaming_store');

    $id = $_GET['id'];
    $qty = $_GET['quantity'];

    $query = "SELECT * FROM products WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $product = mysqli_fetch_assoc($result);

    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] =[];
    }

    $_SESSION['cart'][$id] = [
        'id' => $product['id'],
        'name' => $product['name'],
        'price' => $product['price'],
        'image' => $product['image'],
        'quantity' => $qty,
    ];

    header("Location: product_info.php?id=$id");
?>