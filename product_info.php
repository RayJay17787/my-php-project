<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'gaming_store');

if (!isset($_SESSION['customer'])) {
    header("Location: signin.php");
    exit();
}

$id = $_GET['id'];
$query = "SELECT * FROM products WHERE id = $id";
$result = mysqli_query($conn, $query);
$total = mysqli_fetch_assoc($result);

include "userheader.php";
?>

<body>
    <div class="container my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img style="height: 700px;" src="images/<?= $total['image'] ?>" alt="product"
                        class="card-img rounded mt-5">
                </div>

                <div class="col-md-6">
                    <div class="card shadow mt-5 mb-1 ">
                        <div class="card bg-danger text-white h-50 ">
                            <h2 class="text-center py-2 fw-bold">
                                <div class="py-2 mt-2"><i class="bi bi-info-square-fill pe-2"></i>Product Details</div>
                            </h2>
                        </div>
                    </div>
                    <h3 class="mb-3 mt-5"><b><?= $total['name'] ?></b></h3>

                    <h4 class="mb-0"><?= $total['company'] ?></h4>
                    <br>
                    <?php
                    if ($total['platform'] == 'Playstation 5') {
                        ?>
                        <h6>Available On <i style="width: 30px; height: 30px;" class="fa-brands fa-playstation me-2"></i>
                        </h6>
                        <?php
                    }
                    if ($total['platform'] == 'Playstation 4') {
                        ?>
                        <h6>Available On <i style="width: 30px; height: 30px; color: blue;"
                                class="fa-brands fa-playstation me-2"></i></h6>
                        <?php
                    }
                    if ($total['platform'] == 'Xbox') {
                        ?>
                        <h6>Available On <i style="width: 30px; height: 30px; color: green;"
                                class="fa-brands fa-xbox me-2"></i></h6>
                        <?php
                    }
                    if ($total['platform'] == 'Nintendo') {
                        ?>
                        <h6>Available On <i style="width: 30px; height: 30px; color: red;"
                                class="bi bi-nintendo-switch me-2"></i></h6>
                        <?php
                    }
                    ?>
                    <hr>
                    <?php
                    if ($total['stock'] > 0) {
                        ?>
                        <h5 style="color: green;" class="mb-2">In Stock: <?= $total['stock'] ?></h5>
                        <?php
                    } else {
                        ?>
                        <h5 style="color: red;" class="mb-2">Out of Stock</h5>
                        <?php
                    }
                    ?>

                    <h3 class="mb-3" id="productPrice" data-price="<?= $total['price'] ?>">Rs.<?= $total['price'] ?>
                    </h3>
                    <form action="checkout_page.php?id=<?= $total['id']; ?>" method="post">
                        <div class="d-flex align-items-center mb-3">
                            <label class="me-3 fw-bold">Quantity:</label>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-secondary" id="decreaseBtn">-</button>
                                <input name="quantity" type="text" class="form-control text-center" id="quantity"
                                    value="" style="max-width: 60px;" readonly>
                                <button type="button" class="btn btn-outline-secondary" id="increaseBtn">+</button>
                            </div>
                        </div>
                        <div class="mb-3">
                            <b>Subtotal:</b> <span id="subtotal">Rs.<?= $total['price'] ?></span>
                        </div>
                    </form>
                    <div>
                        <a id="addToCartBtn" href="add_to_cart.php?id=<?= $total['id']; ?>&quantity=1">
                            <button class="btn btn-warning w-100 mb-3 py-2"><i
                                    class="fa-solid fa-cart-arrow-down me-2"></i>Add To Cart</button>
                        </a>
                    </div>
                    <a id="buyNowBtn" href="checkout_page.php?id=<?= $total['id']; ?>&quantity=1"><button type="button"
                            class="btn btn-success w-100 py-2 mb-3">Buy It Now</button></a>
                    <a type="button" href="user.php" class="btn btn-danger w-100 py-2 mb-3">Go Back</a>


                </div>
            </div>
        </div>
    </div>
    <script>
        const pricePerUnit = parseFloat(document.getElementById('productPrice').getAttribute('data-price'));
        const quantityInput = document.getElementById('quantity');
        const buyNowBtn = document.getElementById('buyNowBtn');
        const addToCartBtn = document.getElementById('addToCartBtn');
        const productId = "<?= $total['id']; ?>";

        let quantity = 1;
        quantityInput.value = quantity;

        const subtotalSpan = document.getElementById('subtotal');
        const increaseBtn = document.getElementById('increaseBtn');
        const decreaseBtn = document.getElementById('decreaseBtn');

        function updateUI() {
            const subtotal = pricePerUnit * quantity;
            subtotalSpan.textContent = "Rs." + subtotal;
            quantityInput.value = quantity;
            buyNowBtn.href = "checkout_page.php?id=" + productId + "&quantity=" + quantity;
            addToCartBtn.href = "add_to_cart.php?id=" + productId + "&quantity=" + quantity;
        }

        increaseBtn.addEventListener('click', function () {
            quantity++;
            updateUI();
        });

        decreaseBtn.addEventListener('click', function () {
            if (quantity > 1) {
                quantity--;
                updateUI();
            }
        });

        updateUI();
    </script>
</body>

</html>