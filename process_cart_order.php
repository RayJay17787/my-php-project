<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'gaming_store');

$customer_id = $_SESSION['customer']['id'];
$cart = $_SESSION['cart'];

$grand_total = $_POST['grand_total'];
$shipping_address = $_POST['customer_address'];
$order_date = date('Y-m-d');

$order_query = "INSERT INTO orders (customer_id, order_date, total_amount, shipping_address) values($customer_id, '$order_date', $grand_total, '$shipping_address')";

mysqli_query($conn, $order_query);

$order_id = mysqli_insert_id($conn);

foreach($cart as $item){
    $product_id = $item['id'];
    $quantity = $item['quantity'];
    $price = $item['price'];

    $item_query = "INSERT INTO order_items (order_id, product_id, quantity, price_at_purchase) values($order_id, $product_id, $quantity, $price)";

    mysqli_query($conn, $item_query);
}

unset($_SESSION['cart']);

echo "<script> alert('Order Placed Successfully!'); window.location.href = 'user.php'; </script>";
?>