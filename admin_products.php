<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'gaming_store');

$query = "SELECT * FROM products";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

include 'adminheader.php';
?>

<div class="container-fluid px-4 pt-2">
    <div class="row g-4">
        <h1 class="text-center mb-3"><b>Products</b></h1>
        <?php
        for ($i = 0; $i < $row; $i++) {
            $total = mysqli_fetch_assoc($result);
        ?>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card border shadow-sm h-100 product-card">
                    <a class="text-decoration-none text-dark" href="">
                        <img src="images/<?= $total['image']; ?>"
                            class="card-img-top" alt="Product" style="height: 300px;">
                        <div class="card-body d-flex flex-column">
                            <div class="card-title" style="min-height: 48px;">
                                <b><?= $total['name']; ?></b>
                                <br>
                                <?= $total['company']; ?>
                                <br>
                                <?= $total['platform']; ?>
                            </div>
                    </a>
                    <p class="text-danger fw-bold mb-3">Rs. <?= $total['price']; ?></p>
                    <button class="btn btn-danger w-100 mt-auto">
                        <i style="color: white;" class="fa-regular fa-eye"></i> View Product
                    </button>
                </div>
            </div>
    </div>

<?php
        }
?>
</div>
</div>
</body>