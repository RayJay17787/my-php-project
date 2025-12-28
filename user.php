<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'gaming_store');
$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);

include 'userheader.php';
?>

<div id="promobanner" class="carousel slide" data-bs-ride="carousel" style="margin-top: 70px; min-height: 100vh;">
    <div class="carousel-inner w-100 h-100">
        <div class="carousel-item active">
            <img src="images/60bd647d-0f8f-49f6-b53c-90370462d209.jpg" class="w-100" alt="sale"
                style="height: 100vh; object-fit: cover;">
        </div>
        <div class="carousel-item">
            <img src="images/1.jpg" class="w-100" alt="xbox" style="height: 100vh; object-fit: cover;">
        </div>
        <div class="carousel-item">
            <img src="images/cb44e938bef3d877aa115fdba8968b18.jpg" class="w-100" alt="ps5"
                style="height: 100vh; object-fit: cover;">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#promobanner" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#promobanner" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold mb-0 border-bottom border-danger border-3 pb-2">New Arrivals</h2>
        <a href="#" class="btn border-black">View All</a>
    </div>
    <div id="newarrival" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row g-4">
                    <?php
                    for ($i = 0; $i < 4; $i++) {
                        $total = mysqli_fetch_assoc($result);
                        if ($total) {
                            ?>
                            <div class="col-lg-3 col-md-4">
                                <div class="card border shadow-sm h-100">
                                    <a class="text-decoration-none text-dark" href="">
                                        <img src="images/<?= $total['image'] ?>" class="card-img-top" alt="Product"
                                            style="height: 300px;">
                                    </a>
                                    <div class="card-body d-flex flex-column">
                                        <div class="card-title" style="min-height: 48px;"><?= $total['name'] ?></div>
                                        <p class="text-danger fw-bold mb-3">$<?= $total['price'] ?></p>
                                        <a href="product_info.php?id=<?= $total['id'] ?>">
                                            <button class="btn btn-danger w-100 mt-auto" type="submit">
                                                <i class="bi bi-eye-fill"></i> View Details
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row g-4">
                    <?php
                    for ($i = 0; $i < 4; $i++) {
                        $total = mysqli_fetch_assoc($result);
                        if ($total) {
                            ?>
                            <div class="col-lg-3 col-md-4">
                                <div class="card border shadow-sm h-100">
                                    <a class="text-decoration-none text-dark" href="">
                                        <img src="images/<?= $total['image'] ?>" class="card-img-top" alt="Product"
                                            style="height: 300px;">
                                    </a>
                                    <div class="card-body d-flex flex-column">
                                        <div class="card-title" style="min-height: 48px;"><?= $total['name'] ?></div>
                                        <p class="text-danger fw-bold mb-3">$<?= $total['price'] ?></p>
                                        <a href="product_info.php?id=<?= $total['id'] ?>">
                                            <button class="btn btn-danger w-100 mt-auto" type="submit">
                                                <i class="bi bi-eye-fill"></i> View Details
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#newarrival" data-bs-slide="prev"
            style="width: 0px;">
            <span class="carousel-control-prev-icon bg-dark rounded-circle p-3"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#newarrival" data-bs-slide="next"
            style="width: 0px;">
            <span class="carousel-control-next-icon bg-dark rounded-circle p-3"></span>
        </button>
    </div>
</div>

<?php $result = mysqli_query($conn, "SELECT * FROM products WHERE platform = 'Playstation 5'"); ?>
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold mb-0 border-bottom border-danger border-3 pb-2">PS5 GAMES</h2>
        <a href="#" class="btn border-black">View All</a>
    </div>
    <div id="ps5games" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row g-4">
                    <?php
                    for ($i = 0; $i < 4; $i++) {
                        $total = mysqli_fetch_assoc($result);
                        if ($total) {
                            ?>
                            <div class="col-lg-3 col-md-4">
                                <div class="card border shadow-sm h-100">
                                    <a class="text-decoration-none text-dark" href="">
                                        <img src="images/<?= $total['image'] ?>" class="card-img-top" alt="Product"
                                            style="height: 300px;">
                                    </a>
                                    <div class="card-body d-flex flex-column">
                                        <div class="card-title" style="min-height: 48px;"><?= $total['name'] ?></div>
                                        <p class="text-danger fw-bold mb-3">$<?= $total['price'] ?></p>
                                        <a href="product_info.php?id=<?= $total['id'] ?>">
                                            <button class="btn btn-danger w-100 mt-auto" type="submit">
                                                <i class="bi bi-eye-fill"></i> View Details
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row g-4">
                    <?php
                    for ($i = 0; $i < 4; $i++) {
                        $total = mysqli_fetch_assoc($result);
                        if ($total) {
                            ?>
                            <div class="col-lg-3 col-md-4">
                                <div class="card border shadow-sm h-100">
                                    <a class="text-decoration-none text-dark" href="">
                                        <img src="images/<?= $total['image'] ?>" class="card-img-top" alt="Product"
                                            style="height: 300px;">
                                    </a>
                                    <div class="card-body d-flex flex-column">
                                        <div class="card-title" style="min-height: 48px;"><?= $total['name'] ?></div>
                                        <p class="text-danger fw-bold mb-3">$<?= $total['price'] ?></p>
                                        <a href="product_info.php?id=<?= $total['id'] ?>">
                                            <button class="btn btn-danger w-100 mt-auto" type="submit">
                                                <i class="bi bi-eye-fill"></i> View Details
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#ps5games" data-bs-slide="prev"
            style="width: 0px;">
            <span class="carousel-control-prev-icon bg-dark rounded-circle p-3"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#ps5games" data-bs-slide="next"
            style="width: 0px;">
            <span class="carousel-control-next-icon bg-dark rounded-circle p-3"></span>
        </button>
    </div>
</div>

<?php $result = mysqli_query($conn, "SELECT * FROM products WHERE platform = 'Playstation 4'"); ?>
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold mb-0 border-bottom border-danger border-3 pb-2">PS4 GAMES</h2>
        <a href="#" class="btn border-black">View All</a>
    </div>
    <div id="ps4games" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row g-4">
                    <?php
                    for ($i = 0; $i < 4; $i++) {
                        $total = mysqli_fetch_assoc($result);
                        if ($total) {
                            ?>
                            <div class="col-lg-3 col-md-4">
                                <div class="card border shadow-sm h-100">
                                    <a class="text-decoration-none text-dark" href="">
                                        <img src="images/<?= $total['image'] ?>" class="card-img-top" alt="Product"
                                            style="height: 300px;">
                                    </a>
                                    <div class="card-body d-flex flex-column">
                                        <div class="card-title" style="min-height: 48px;"><?= $total['name'] ?></div>
                                        <p class="text-danger fw-bold mb-3">$<?= $total['price'] ?></p>
                                        <a href="product_info.php?id=<?= $total['id'] ?>">
                                            <button class="btn btn-danger w-100 mt-auto" type="submit">
                                                <i class="bi bi-eye-fill"></i> View Details
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row g-4">
                    <?php
                    for ($i = 0; $i < 4; $i++) {
                        $total = mysqli_fetch_assoc($result);
                        if ($total) {
                            ?>
                            <div class="col-lg-3 col-md-4">
                                <div class="card border shadow-sm h-100">
                                    <a class="text-decoration-none text-dark" href="">
                                        <img src="images/<?= $total['image'] ?>" class="card-img-top" alt="Product"
                                            style="height: 300px;">
                                    </a>
                                    <div class="card-body d-flex flex-column">
                                        <div class="card-title" style="min-height: 48px;"><?= $total['name'] ?></div>
                                        <p class="text-danger fw-bold mb-3">$<?= $total['price'] ?></p>
                                        <a href="product_info.php?id=<?= $total['id'] ?>">
                                            <button class="btn btn-danger w-100 mt-auto" type="submit">
                                                <i class="bi bi-eye-fill"></i> View Details
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#ps4games" data-bs-slide="prev"
            style="width: 0px;">
            <span class="carousel-control-prev-icon bg-dark rounded-circle p-3"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#ps4games" data-bs-slide="next"
            style="width: 0px;">
            <span class="carousel-control-next-icon bg-dark rounded-circle p-3"></span>
        </button>
    </div>
</div>

<?php $result = mysqli_query($conn, "SELECT * FROM products WHERE platform = 'Xbox'"); ?>
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold mb-0 border-bottom border-danger border-3 pb-2">XBOX SERIES X/S</h2>
        <a href="#" class="btn border-black">View All</a>
    </div>
    <div id="xboxseriesx" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row g-4">
                    <?php
                    for ($i = 0; $i < 4; $i++) {
                        $total = mysqli_fetch_assoc($result);
                        if ($total) {
                            ?>
                            <div class="col-lg-3 col-md-4">
                                <div class="card border shadow-sm h-100">
                                    <a class="text-decoration-none text-dark" href="">
                                        <img src="images/<?= $total['image'] ?>" class="card-img-top" alt="Product"
                                            style="height: 300px;">
                                    </a>
                                    <div class="card-body d-flex flex-column">
                                        <div class="card-title" style="min-height: 48px;"><?= $total['name'] ?></div>
                                        <p class="text-danger fw-bold mb-3">$<?= $total['price'] ?></p>
                                        <a href="product_info.php?id=<?= $total['id'] ?>">
                                            <button class="btn btn-danger w-100 mt-auto" type="submit">
                                                <i class="bi bi-eye-fill"></i> View Details
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row g-4">
                    <?php
                    for ($i = 0; $i < 4; $i++) {
                        $total = mysqli_fetch_assoc($result);
                        if ($total) {
                            ?>
                            <div class="col-lg-3 col-md-4">
                                <div class="card border shadow-sm h-100">
                                    <a class="text-decoration-none text-dark" href="">
                                        <img src="images/<?= $total['image'] ?>" class="card-img-top" alt="Product"
                                            style="height: 300px;">
                                    </a>
                                    <div class="card-body d-flex flex-column">
                                        <div class="card-title" style="min-height: 48px;"><?= $total['name'] ?></div>
                                        <p class="text-danger fw-bold mb-3">$<?= $total['price'] ?></p>
                                        <a href="product_info.php?id=<?= $total['id'] ?>">
                                            <button class="btn btn-danger w-100 mt-auto" type="submit">
                                                <i class="bi bi-eye-fill"></i> View Details
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#xboxseriesx" data-bs-slide="prev"
            style="width: 0px;">
            <span class="carousel-control-prev-icon bg-dark rounded-circle p-3"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#xboxseriesx" data-bs-slide="next"
            style="width: 0px;">
            <span class="carousel-control-next-icon bg-dark rounded-circle p-3"></span>
        </button>
    </div>
</div>

<?php $result = mysqli_query($conn, "SELECT * FROM products WHERE platform = 'Nintendo'"); ?>
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold mb-0 border-bottom border-danger border-3 pb-2">NINTENDO SWITCH</h2>
        <a href="#" class="btn border-black">View All</a>
    </div>
    <div id="nintendoswitch" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row g-4">
                    <?php
                    for ($i = 0; $i < 4; $i++) {
                        $total = mysqli_fetch_assoc($result);
                        if ($total) {
                            ?>
                            <div class="col-lg-3 col-md-4">
                                <div class="card border shadow-sm h-100">
                                    <a class="text-decoration-none text-dark" href="">
                                        <img src="images/<?= $total['image'] ?>" class="card-img-top" alt="Product"
                                            style="height: 300px;">
                                    </a>
                                    <div class="card-body d-flex flex-column">
                                        <div class="card-title" style="min-height: 48px;"><?= $total['name'] ?></div>
                                        <p class="text-danger fw-bold mb-3">$<?= $total['price'] ?></p>
                                        <a href="product_info.php?id=<?= $total['id'] ?>">
                                            <button class="btn btn-danger w-100 mt-auto" type="submit">
                                                <i class="bi bi-eye-fill"></i> View Details
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row g-4">
                    <?php
                    for ($i = 0; $i < 4; $i++) {
                        $total = mysqli_fetch_assoc($result);
                        if ($total) {
                            ?>
                            <div class="col-lg-3 col-md-4">
                                <div class="card border shadow-sm h-100">
                                    <a class="text-decoration-none text-dark" href="">
                                        <img src="images/<?= $total['image'] ?>" class="card-img-top" alt="Product"
                                            style="height: 300px;">
                                    </a>
                                    <div class="card-body d-flex flex-column">
                                        <div class="card-title" style="min-height: 48px;"><?= $total['name'] ?></div>
                                        <p class="text-danger fw-bold mb-3">$<?= $total['price'] ?></p>
                                        <a href="product_info.php?id=<?= $total['id'] ?>">
                                            <button class="btn btn-danger w-100 mt-auto" type="submit">
                                                <i class="bi bi-eye-fill"></i> View Details
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#nintendoswitch" data-bs-slide="prev"
            style="width: 0px;">
            <span class="carousel-control-prev-icon bg-dark rounded-circle p-3"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#nintendoswitch" data-bs-slide="next"
            style="width: 0px;">
            <span class="carousel-control-next-icon bg-dark rounded-circle p-3"></span>
        </button>
    </div>
</div>

<div class="container my-5">
    <h2 class="fw-bold mb-4 border-bottom border-danger border-3 pb-2">Shop by Category</h2>
    <div class="row g-4 text-center justify-content-center g-lg-5">
        <div class="col-lg-2 col-md-4 col-6">
            <a href="#" class="text-decoration-none text-dark">
                <div class="card border shadow-sm h-100">
                    <div class="card-body">
                        <i class="fa-brands fa-xbox fs-1 mb-3 mt-3" style="color: #199421;"></i>
                        <h6 class="card-title">Xbox</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
            <a href="#" class="text-decoration-none text-dark">
                <div class="card border shadow-sm h-100">
                    <div class="card-body">
                        <i class="fa-brands fa-playstation fs-1 text-primary mb-3 mt-3"></i>
                        <h6 class="card-title">PS4</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
            <a href="#" class="text-decoration-none text-dark">
                <div class="card border shadow-sm h-100">
                    <div class="card-body">
                        <i class="bi bi-nintendo-switch fs-1 mb-3 mt-3" style="color: #ce0909;"></i>
                        <h6 class="card-title mt-2">Nintendo Switch</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-2 col-md-4 col-6">
            <a href="#" class="text-decoration-none text-dark">
                <div class="card border shadow-sm h-100">
                    <div class="card-body">
                        <i class="fa-brands fa-playstation fs-1 mb-3 mt-3" style="color: black;"></i>
                        <h6 class="card-title">PS5</h6>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>