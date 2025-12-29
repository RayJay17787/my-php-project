<?php
session_start();

include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' || isset($_POST['total_amount']) || isset($_POST['grand_total'])) {

    if (isset($_POST['total_amount'])) {
        $total_amount = $_POST['total_amount'];
    } else {
        $total_amount = $_POST['grand_total'];
    }

    $customer_name = $_POST['customer_name'];
    $shipping_address = $_POST['customer_address'];

    $_SESSION['temp_order_details'] = $_POST;

    $url = "https://api.stripe.com/v1/checkout/sessions";

    if (isset($_POST['product_name'])) {
        $line_items = [
            [
                'price_data' => [
                    'currency' => 'pkr',
                    'product_data' => [
                        'name' => $_POST['product_name'],
                    ],
                    'unit_amount' => $total_amount * 100,
                ],
                'quantity' => $_POST['quantity'] ?? 1,
            ]
        ];
    } else {
        $line_items = [
            [
                'price_data' => [
                    'currency' => 'pkr',
                    'product_data' => [
                        'name' => 'Order from Game Vault',
                    ],
                    'unit_amount' => $total_amount * 100,
                ],
                'quantity' => 1,
            ]
        ];
    }

    $data = http_build_query([
        'payment_method_types' => ['card'],
        'line_items' => $line_items,
        'mode' => 'payment',
        'success_url' => 'http://' . $_SERVER['HTTP_HOST'] . '/my-php-project/payment_success.php?session_id={CHECKOUT_SESSION_ID}',
        'cancel_url' => 'http://' . $_SERVER['HTTP_HOST'] . '/my-php-project/user.php',
        'customer_email' => $_SESSION['customer']['email'] ?? '',
    ]);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_USERPWD, $stripe_secret_key . ':');

    $headers = array();
    $headers[] = 'Content-Type: application/x-www-form-urlencoded';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
        exit();
    }
    curl_close($ch);

    $session = json_decode($result, true);

    if (isset($session['url'])) {
        header("Location: " . $session['url']);
        exit();
    } else {
        echo "Stripe Error: " . ($session['error']['message'] ?? 'Unknown Error');
        print_r($session);
    }
} else {
    header("Location: user.php");
    echo '<script>alert("Order Not Placed");</script>';
}
?>