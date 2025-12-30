<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'gaming_store');

$user = $_SESSION['customer'];
$cart = $_SESSION['cart'];

$grand_total = 0;

include "userheader.php";
?>

<head>
    <title>Checkout</title>
</head>

<div class="container" style="margin-top: 100px;">
    <div class="row">

        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header bg-danger text-white">
                    <h4 class="mt-2"><i class="fas fa-shopping-cart me-2"></i>Order Summary</h4>
                </div>
                <div class="card-body">
                    <?php
                    $grand_total = 0;
                    $tax = 1.18;
                    foreach ($cart as $item) {
                        $subtotal = $item['price'] * $item['quantity'];
                        $grand_total = $grand_total + $subtotal * $tax;
                        ?>
                        <div class="d-flex border-bottom pb-3 mb-3">
                            <img src="images/<?= $item['image'] ?>" style="width: 80px; height: 80px;">
                            <div class="ms-3">
                                <h6><?= $item['name'] ?></h6>
                                <p class="mb-0">Rs.<?= $item['price'] ?> x <?= $item['quantity'] ?></p>
                                <p class="fw-bold">Subtotal: Rs.<?= $subtotal ?></p>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <h4 class="text-center">Grand Total: Rs.<?= $grand_total ?></h4>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-danger text-white">
                    <h4 class="mt-2"><i class="fas fa-user me-2"></i>Shipping Details</h4>
                </div>
                <div class="card-body">
                    <form action="stripe_checkout.php" method="POST">

                        <input type="hidden" name="grand_total" value="<?= $grand_total ?>">

                        <div class="mb-3">
                            <label class="form-label"><b>Full Name</b></label>
                            <input type="text" value="<?= $user['name'] ?>" class="form-control" name="customer_name"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label"><b>Email</b></label>
                            <input type="email" value="<?= $user['email'] ?>" class="form-control" name="customer_email"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label"><b>Contact</b></label>
                            <input value="<?= $user['phone'] ?>" type="tel" class="form-control" name="customer_contact"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label"><b>Address</b></label>
                            <textarea class="form-control" name="customer_address" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-success w-100 mb-2">Place Order</button>
                        <a href="user.php" class="btn btn-danger w-100">Cancel</a>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>