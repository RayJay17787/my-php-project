<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'gaming_store');

if (!isset($_SESSION['admin'])) {
    header("Location: signin.php");
    exit();
}

$admin = $_SESSION['admin'];

$user_query = "SELECT * FROM customers";
$admin_query = "SELECT * FROM users";
$order_query = "SELECT * FROM orders";
$product_query = "SELECT * FROM products";

$user_result = mysqli_query($conn, $user_query);
$admin_result = mysqli_query($conn, $admin_query);
$order_result = mysqli_query($conn, $order_query);
$product_result = mysqli_query($conn, $product_query);

$userRow = mysqli_num_rows($user_result);
$adminRow = mysqli_num_rows($admin_result);
$orderRow = mysqli_num_rows($order_result);
$productRow = mysqli_num_rows($product_result);

$ps4_query = "SELECT * FROM products WHERE platform = 'Playstation 4'";
$ps5_query = "SELECT * FROM products WHERE platform = 'Playstation 5'";
$xbox_query = "SELECT * FROM products WHERE platform = 'Xbox'";
$nintendo_query = "SELECT * FROM products WHERE platform = 'Nintendo'";

$ps4_result = mysqli_query($conn, $ps4_query);
$ps5_result = mysqli_query($conn, $ps5_query);
$xbox_result = mysqli_query($conn, $xbox_query);
$nintendo_result = mysqli_query($conn, $nintendo_query);

$ps4Row = mysqli_num_rows($ps4_result);
$ps5Row = mysqli_num_rows($ps5_result);
$xboxRow = mysqli_num_rows($xbox_result);
$nintendoRow = mysqli_num_rows($nintendo_result);

$revenue_query = "SELECT SUM(order_items.quantity * products.price) as total FROM order_items JOIN products ON order_items.product_id = products.id";
$revenue_result = mysqli_query($conn, $revenue_query);
$totalRevenue = mysqli_fetch_assoc($revenue_result)['total'];

include 'adminheader.php';
?>

<body class="bg-light">
    <div class="bg-danger text-white text-center p-4 mb-4 shadow-sm">
        <div class="container-fluid">
            <h2>Dashboard</h2>
        </div>
    </div>

    <div class="container-fluid px-4 pt-2">
        <div class="row g-4 mb-4">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <div class="bg-primary shadow text-white rounded p-3 d-inline-block mb-3">
                            <i class="fa-solid fa-user fs-2"></i>
                        </div>
                        <p class="text-uppercase text-muted small mb-2 mt-2">Users</p>
                        <h2 class="fw-bold mt-3"><?php echo $userRow; ?></h2>

                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <div class="bg-danger shadow text-white rounded p-3 d-inline-block mb-3">
                            <i class="fa-solid fa-user-shield fs-2"></i>
                        </div>
                        <p class="text-uppercase text-muted small mb-2 mt-2">Admin</p>
                        <h2 class="fw-bold mt-3"><?php echo $adminRow; ?></h2>

                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <div class="bg-success shadow text-white rounded p-3 d-inline-block mb-3">
                            <i class="fa-solid fa-cart-shopping fs-2"></i>
                        </div>
                        <p class="text-uppercase text-muted small mb-2 mt-2">Orders</p>
                        <h2 class="fw-bold mt-3"><?php echo $orderRow; ?></h2>

                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <div class="bg-primary shadow text-white rounded p-3 d-inline-block mb-4">
                            <i class="fa-brands fa-playstation fs-2" style="color: rgb(255, 255, 255);"></i>
                        </div>
                        <p class="text-uppercase text-muted small mb-2">PlayStation 4</p>
                        <h2 class="fw-bold mb-2"><?php
                            echo $ps4Row;
                        ?></h2>
                        <p class="text-muted small mb-0">
                            In stock
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row g-4">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <div class="bg-dark shadow text-white rounded p-3 d-inline-block mb-3">
                            <i class="fa-brands fa-playstation fs-2"></i>
                        </div>
                        <p class="text-uppercase  text-muted small mb-2">PlayStation 5</p>
                        <h2 class="fw-bold mb-2"><?php echo $ps5Row; ?></h2>
                        <p class="text-muted small mb-0">
                            In stock
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <div class="bg-success text-white shadow rounded p-3 d-inline-block mb-3">
                            <i class="fa-brands fa-xbox fs-2"></i>
                        </div>
                        <p class="text-uppercase text-muted small mb-2">Xbox</p>
                        <h2 class="fw-bold mb-2"><?php echo $xboxRow; ?></h2>
                        <p class="text-muted small mb-0">
                            In stock
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <div class="bg-danger text-white rounded-3 shadow d-inline-flex justify-content-center align-items-center mb-3"
                            style="width: 75px; height: 68px;">
                            <i class="bi bi-nintendo-switch fs-2"></i>
                        </div>
                        <p class="text-uppercase text-muted small mb-2">Nintendo</p>
                        <h2 class="fw-bold mb-2"><?php echo $nintendoRow; ?></h2>
                        <p class="text-muted small mb-0">
                            In stock
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <div class="bg-warning shadow text-white rounded p-3 d-inline-block mb-3">
                            <i class="fa-solid fa-dollar-sign fs-2"></i>
                        </div>
                        <p class="text-uppercase text-muted small mb-2">Revenue</p>
                        <h2 class="fw-bold mb-2"><?php echo $totalRevenue; ?></h2>
                        <p class="text-muted small mb-0"> Total
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>