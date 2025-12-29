<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'gaming_store');

$query = "SELECT orders.id, orders.shipping_address, customers.name, customers.phone, customers.email FROM orders JOIN customers ON orders.customer_id = customers.id";

$revenue_query = "SELECT SUM(order_items.quantity * products.price) as total FROM order_items JOIN products ON order_items.product_id = products.id";

$revenue_result = mysqli_query($conn, $revenue_query);
$total_revenue = mysqli_fetch_assoc($revenue_result)['total'];

$result = mysqli_query($conn, $query);
$total_orders = mysqli_num_rows($result);

include 'adminheader.php';
?>

<div class="container-fluid px-4 pt-2">
    <h1 class="text-center mb-4">Orders</h1>

    <div class="me-2 mb-3">
        <h6><b>Total Revenue: <?php
        echo $total_revenue;
        ?></b></h6>
    </div>

    <table class="table table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>Customer Contact</th>
                <th>Customer Email</th>
                <th>Customer Location</th>
                <th>Order Items</th>
                <th>Order Revenue</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for($i = 0; $i < $total_orders; $i++){
                $row = mysqli_fetch_assoc($result);
                $order_id = $row['id'];
                
                $item_query = "SELECT products.name FROM order_items JOIN products ON order_items.product_id = products.id WHERE order_items.order_id = $order_id";
                $item_result = mysqli_query($conn, $item_query);
                $total_items = mysqli_num_rows($item_result);
            ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['name']; ?></td>
                    <td><?= $row['phone']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['shipping_address'];?></td>
                    <td>
                        <?php
                        for($j = 0; $j < $total_items; $j++){
                            $item = mysqli_fetch_assoc($item_result);
                            echo $item['name'] . "<br>";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        $revenue_query = "SELECT SUM(order_items.quantity * products.price) as revenue FROM order_items JOIN products ON order_items.product_id = products.id WHERE order_items.order_id = $order_id";
                        $revenue_result = mysqli_query($conn, $revenue_query);
                        $revenue = mysqli_fetch_assoc($revenue_result);
                        echo $revenue['revenue'];
                        ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>