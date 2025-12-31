<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'gaming_store');
$id = $_GET['id'];
$qty = $_GET['quantity'];
$result = mysqli_query($conn, "SELECT * FROM products WHERE id = $id");

$total = mysqli_fetch_assoc($result);

$user = $_SESSION['customer'];

include "userheader.php";
?>

<head>
    <title>Checkout</title>
</head>

<body class="bg-light">

    <div class="container" style="margin-top: 80px;">
        <div class="row align-items-center">

            <div class="col-md-6">
                <img src="images/<?= $total['image'] ?>" class="card-img rounded shadow" alt="Product"
                    style="height: 790px;">
            </div>

            <div class="col-md-6 mt-5">
                <div class="card shadow mb-5">

                    <div class="card-header bg-danger text-white">
                        <h3 class="mt-2 text-center"><i class="fas fa-shopping-cart me-2"></i><b>Checkout</b></h3>
                    </div>

                    <div class="card-body">
                        <form action="stripe_checkout.php" method="POST">


                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="fw-bold">Order Summary</h5>

                                    <div class="row">
                                        <div class="col-6">Product:</div>
                                        <div class="col-6 text-end fw-bold" id="displayProduct"> <?= $total['name'] ?>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">Price:</div>
                                        <div class="col-6 text-end" id="displayPrice"> Rs.<?= $total['price'] ?></div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-6">Tax:</div>
                                        <div class="col-6 text-end" id="displayTax">18%</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">Quantity:</div>
                                        <div class="col-6 text-end" id="displayQuantity"> <?= $qty ?></div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-6 fw-bold">Total:</div>
                                        <div class="col-6 text-end text-primary fw-bold" id="displayTotal">
                                            Rs.<?= $total['price'] * $qty * 1.18?></div>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="product_name" id="productName">
                            <input type="hidden" name="product_price" id="productPrice">
                            <input type="hidden" name="quantity" id="quantity">
                            <input type="hidden" name="total_amount" id="totalAmount">
                            <input type="hidden" name="product_id" value="<?= $id ?>">

                            <div class="mb-3">
                                <label class="form-label"><b>Full Name</b></label>
                                <input type="text" value="<?= $user['name'] ?>" class="form-control"
                                    name="customer_name" required readonly>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Email</b></label>
                                <input type="email" value="<?= $user['email'] ?>" class="form-control"
                                    name="customer_email" required readonly>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Contact</b></label>
                                <input value="<?= $user['phone'] ?>" type="tel" class="form-control"
                                    name="customer_contact" pattern="[0-9]{11}" placeholder="03001234567" required readonly>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"><b>Address</b></label>
                                <textarea class="form-control" name="customer_address" required></textarea>
                            </div>

                            <button onclick="return confirm('Are you sure you want to place this order?')" type="submit"
                                class="btn btn-success w-100 mb-2">Place Order</button>
                            <a href="product_info.php?id=<?= $id ?>">
                                <button type="button" class="btn btn-danger w-100">Go Back</button>
                            </a>

                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <script>
        var productName = "<?= $total['name'] ?>";
        var productPrice = "<?= $total['price'] ?>";
        var quantity = "<?= $qty ?>";
        var totalAmount = productPrice * quantity;

        document.getElementById("productName").value = productName;
        document.getElementById("productPrice").value = productPrice;
        document.getElementById("quantity").value = quantity;
        document.getElementById("totalAmount").value = totalAmount;
    </script>

</body>

</html>