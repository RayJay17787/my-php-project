<?php
include 'userheader.php'
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
</head>

<body>
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-md-6">
                <h1>Product Details</h1>
                <h3 class="mt-4">Description</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam deserunt vero aut ut fugiat
                    laboriosam dolorem labore ipsa, commodi, voluptates asperiores pariatur eos velit quasi dolore vitae
                    nihil odit quas.</p>

                <h3 class="mt-4">Features</h3>
                <p>ipsum dolor sit amet consectetur adipisicing elit. Numquam deserunt vero aut ut fugiat</p>
                <h3 class="mt-4">Specifications</h3>
                <p>ipsum dolor sit amet consectetur adipisicing elit. Numquam deserunt vero aut ut fugiat</p>
            </div>

            <div class="col-md-6 d-flex align-items-start justify-content-center">
                <div class="card">
                    <img src="images\images (2).jpg" class="card-img-top" alt="Red Dead Redemption">
                    <div class="card-body">
                        <h5 class="card-title">Red Dead Redemption</h5>
                        <p class="card-text">Play as Arthur Morgan in this action adventure.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Platform: PS4</li>
                        <li class="list-group-item">Price: $67.00</li>
                    </ul>
                    <div class="card-body d-flex justify-content-center">
                        <a href="#" class="card-link text-white text-decoration-none btn btn-danger w-100">
                            <i class="fa-solid fa-cart-plus"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
include 'footer.php';
?>