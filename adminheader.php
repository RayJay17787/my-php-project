<?php
    $conn = mysqli_connect('localhost','root','','gaming_store');

    if(!isset($_SESSION['admin'])){
        header("Location: siginin.php");
        exit();
    }

        $user = $_SESSION['admin'];

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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Vault - Navigation</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <style>

    </style>
</head>

<body>

    <div class="sidebar">
        <div class="text-white p-3" style="background: black; height:70px;">
            <a href="dashboard.php" style="text-decoration: none; color: white;">
                <h5 class="mt-1 text-center"><b><i>GAME</i>VAULT</b></h5>
            </a>
        </div>

        <div class="list-group list-group-flush">
            <a href="dashboard.php" class="list-group-item list-group-item-action ps-4 align-items-center">
                <i class="fa-solid fa-grip me-2"></i> Dashboard</a>
            <a href="users.php" class="list-group-item list-group-item-action ps-4 align-items-center">
                <i class="fa-solid fa-users me-2"></i> Users <span class="badge bg-secondary rounded-pill"><?= $userRow;?></span></a>
            <a href="admin.php" class="list-group-item list-group-item-action ps-4 align-items-center">
                <i class="fa-solid fa-user-tie me-2"></i> Admins <span class="badge bg-secondary rounded-pill"><?= $adminRow;?></span></a>
            <a href="orders.php" class="list-group-item list-group-item-action ps-4 align-items-center">
                <i class="fa-solid fa-basket-shopping me-2"></i> Orders <span class="badge bg-secondary rounded-pill"><?= $orderRow;?></span></a>
            <a href="ps5discs.php" class="list-group-item list-group-item-action ps-4 align-items-center">
                <i class="fa-solid fa-bag-shopping me-2"></i> All Products <span class="badge bg-secondary rounded-pill"><?= $productRow;?></span></a>
        </div>
    </div>

    <nav class="navbar topbar px-4">
        <a class="navbar-brand text-white fw-bold fs-4" href="#"></a>

        <form class="d-flex mx-auto" style="width:500px;">
            <div class="input-group">
                <input type="search" class="form-control" placeholder="Search entire store here...">
                <button class="btn btn-danger">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </form>

        <ul class="navbar-nav flex-row gap-3">
            <li class="nav-item">
                <a class="nav-link text-white" href="dashboard.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="admin_products.php">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="profile.php">
                    <i class="fa-solid fa-user me-1"></i><?= $user['username'];?>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="signout.php">
                    <i class="fa-solid fa-right-from-bracket me-1"></i> Sign Out
                </a>
            </li>
        </ul>
    </nav>

    <div class="main-content">
