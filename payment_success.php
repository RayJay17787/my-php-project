<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'gaming_store');

if (!isset($_GET['session_id'])) {
    header("Location: user.php");
    exit();
}

$post_data = $_SESSION['temp_order_details'] ?? null;

if ($post_data) {
    $customer_id = $_SESSION['customer']['id'];
    $shipping_address = $post_data['customer_address'];
    $order_date = date('Y-m-d');

    if (isset($post_data['grand_total'])) {
        $grand_total = $post_data['grand_total'];
        $cart = $_SESSION['cart'];

        $order_query = "INSERT INTO orders (customer_id, order_date, total_amount, shipping_address) values($customer_id, '$order_date', $grand_total, '$shipping_address')";
        mysqli_query($conn, $order_query);
        $order_id = mysqli_insert_id($conn);

        foreach ($cart as $item) {
            $product_id = $item['id'];
            $quantity = $item['quantity'];
            $price = $item['price'];
            $item_query = "INSERT INTO order_items (order_id, product_id, quantity, price_at_purchase) values($order_id, $product_id, $quantity, $price)";
            mysqli_query($conn, $item_query);
        }
        unset($_SESSION['cart']);

    } elseif (isset($post_data['product_id'])) {
        $product_id = $post_data['product_id'];
        $total_amount = $post_data['total_amount'];
        $quantity = $post_data['quantity'];
        $price = $post_data['product_price'];

        $order_query = "INSERT INTO orders (customer_id, total_amount, shipping_address, order_date) VALUES ($customer_id, $total_amount, '$shipping_address', '$order_date')";
        mysqli_query($conn, $order_query);
        $order_id = mysqli_insert_id($conn);

        $item_query = "INSERT INTO order_items (order_id, product_id, quantity, price_at_purchase) VALUES ($order_id, $product_id, $quantity, $price)";
        mysqli_query($conn, $item_query);
    }

    unset($_SESSION['temp_order_details']);
}

include 'userheader.php';
?>

<div class="container text-center" style="margin-top: 150px;">
    <div class="card shadow p-5">
        <i class="bi bi-check-circle-fill text-success" style="font-size: 80px;"></i>
        <h1 class="mt-3">Payment Successful!</h1>
        <div class="mt-4">
            <a href="user.php" class="btn btn-danger btn-lg">Back to Home</a>
        </div>
    </div>
</div>
<?php
header("Location: user.php");
exit();
?>