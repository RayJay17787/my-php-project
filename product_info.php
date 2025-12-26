<?php
    $conn = mysqli_connect('localhost', 'root', '', 'gaming_store');
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM products WHERE id = $id");
    $total = mysqli_fetch_assoc($result);
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
                    <img src="images/<?= $total['image'] ?>" alt="product" class="card-img rounded">
                </div>
            
                <div class="col-md-6">
                    <h2 class="mb-5 mt-5"><?= $total['name'] ?></h2>
                
                    
                   
                    
                    <p class="mb-3"><?= $total['description'] ?></p>
                    
                    <h3 class="mb-3" id="productPrice" data-price="<?= $total['price'] ?>">Rs.<?= $total['price'] ?></h3>
                    
                    
                    
                    <div class="d-flex align-items-center mb-3">
                        <label class="me-3 fw-bold">Quantity:</label>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-outline-secondary" id="decreaseBtn">-</button>
                            <input type="text" class="form-control text-center" id="quantity" value="0" style="max-width: 60px;" readonly>
                            <button type="button" class="btn btn-outline-secondary" id="increaseBtn">+</button>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <b>Subtotal:</b> <span id="subtotal">Rs.<?= $total['price'] ?></span>
                    </div>
                    <div>
                    <button class="btn btn-danger w-100 mb-2 py-2">
                        <i class="fa-solid fa-cart-arrow-down me-2"></i>Add To Cart
                    </button>
                    </div>
                    <a href="checkout_page.html" class="btn btn-outline-dark w-100 py-2 mb-3">Buy It Now</a>
                    
                    
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const pricePerUnit = parseFloat(document.getElementById('productPrice').getAttribute('data-price'));
        let quantity = 0;

        const quantityInput = document.getElementById('quantity');
        const subtotalSpan = document.getElementById('subtotal');
        const increaseBtn = document.getElementById('increaseBtn');
        const decreaseBtn = document.getElementById('decreaseBtn');

        function updateSubtotal() {
            const subtotal = pricePerUnit * quantity;
            subtotalSpan.textContent = `Rs.${subtotal.toLocaleString('en-PK', {minimumFractionDigits: 2, maximumFractionDigits: 2})}`;
        }

        increaseBtn.addEventListener('click', function() {
            quantity++;
            quantityInput.value = quantity;
            updateSubtotal();
        });

        decreaseBtn.addEventListener('click', function() {
            if (quantity > 0) {
                quantity--;
                quantityInput.value = quantity;
                updateSubtotal();
            }
        });
    </script>
</body>
</html>