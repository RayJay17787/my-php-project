<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'gaming_store');

$query = "SELECT * FROM products WHERE platform = 'Nintendo'";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

include 'userheader.php';
?>

<div class="container p-5 mt-5">
    <div class="row g-4">
        <div class="mt-4 mb-3 d-flex justify-content-center align-items-center gap-2">
            <h1 class="text-center"><b><i style="color: red;" class="bi bi-nintendo-switch me-2"></i>  Nintendo Switch Discs</b></h1>
        </div>
        <?php
        for ($i = 0; $i < $row; $i++) {
            $total = mysqli_fetch_assoc($result);
            if($total['platform'] == 'Nintendo'){
        ?>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card border shadow-sm h-100 product-card">
                    <a class="text-decoration-none text-dark" href="product_info.php?id=<?= $total['id'];?>">
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
                    <a href="product_info.php?id=<?= $total['id'];?>">
                        <button class="btn btn-danger w-100 mt-auto">
                            <i class="bi bi-joystick me-2"></i> View Product Info
                        </button>
                    </a>
                </div>
            </div>
    </div>

<?php
            }
        }
?>
</div>
</div>