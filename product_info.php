<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'gaming_store');
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM products WHERE id = $id");
$total = mysqli_fetch_assoc($result);

include "userheader.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="container my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img style="height: 700px;" src="images/<?= $total['image'] ?>" alt="product"
                    class="card-img rounded mt-5">
                </div>
                
                <div class="col-md-6">
                    <div class="card shadow mt-5 mb-1">
                        <div class="card-header bg-danger text-white">
                        <h2 class="text-center pt-3 mt-5 fw-bold mb-5 pb-3"><i class="bi bi-info-square-fill pe-2"></i>  Product Details</h2>
                    </div>
                    </div>
                    <h3 class="mb-3 mt-5"><b><?= $total['name'] ?></b></h3>

                    <h4 class="mb-0"><?= $total['company'] ?></h4>
                    <br>
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



                    <div class="d-flex align-items-center mb-3">
                        <label class="me-3 fw-bold">Quantity:</label>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-outline-secondary" id="decreaseBtn">-</button>
                            <input type="text" class="form-control text-center" id="quantity" value="1"
                                style="max-width: 60px;" readonly>
                            <button type="button" class="btn btn-outline-secondary" id="increaseBtn">+</button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <b>Subtotal:</b> <span id="subtotal">Rs.<?= $total['price'] ?></span>
                    </div>
                    <div>
                        <button class="btn btn-warning w-100 mb-3 py-2">
                            <i class="fa-solid fa-cart-arrow-down me-2"></i>Add To Cart
                        </button>
                    </div>
                    <a href="checkout_page.php?id=<?php echo $total['id']; ?>"><button type="button "
                            class="btn btn-success w-100 py-2 mb-3">Buy It Now</button></a>
                    <a type="button" href="user.php" class="btn btn-danger w-100 py-2 mb-3">Go Back</a>


                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const pricePerUnit = parseFloat(document.getElementById('productPrice').getAttribute('data-price'));
        let quantity = 1;

        const quantityInput = document.getElementById('quantity');
        const subtotalSpan = document.getElementById('subtotal');
        const increaseBtn = document.getElementById('increaseBtn');
        const decreaseBtn = document.getElementById('decreaseBtn');

        function updateSubtotal() {
            const subtotal = pricePerUnit * quantity;
            subtotalSpan.textContent = `Rs.${subtotal.toLocaleString('en-PK', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`;
        }

        increaseBtn.addEventListener('click', function () {
            quantity++;
            quantityInput.value = quantity;
            updateSubtotal();
        });

        decreaseBtn.addEventListener('click', function () {
            if (quantity > 1) {
                quantity--;
                quantityInput.value = quantity;
                updateSubtotal();
            }
        });
    </script>
</body>

</html>