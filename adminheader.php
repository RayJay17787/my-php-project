<?php
    session_start();
    $conn = mysqli_connect('localhost','root','','gaming_store');

    if(!isset($_SESSION['admin'])){
        header("Location: siginin.php");
        exit();
    }

        $user = $_SESSION('admin');
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

    <style>

    </style>
</head>

<body>

    <div class="sidebar">
        <div class="text-white p-3" style="background:#08010e; height:70px;">
            <h5 class="mt-1 text-center"><b><?php $user['username'];?>'s Admin Panel</b></h5>
        </div>

        <div class="list-group list-group-flush">
            <a href="dashboard.php" class="list-group-item ps-4">
                <i class="fa-solid fa-grip me-2"></i> Dashboard</a>
            <a href="users.php" class="list-group-item ps-4">
                <i class="fa-solid fa-users me-2"></i> Users</a>
            <a href="admin.php" class="list-group-item ps-4">
                <i class="fa-solid fa-user-tie me-2"></i> Admins</a>
            <a href="orders.php" class="list-group-item ps-4">
                <i class="fa-solid fa-basket-shopping me-2"></i> Orders</a>
            <a href="ps5discs.php" class="list-group-item ps-4">
                <i class="fa-solid fa-bag-shopping me-2"></i> All Products</a>
        </div>
    </div>

    <nav class="navbar topbar px-4">
        <a class="navbar-brand text-white fw-bold fs-4" href="#"><i>GAME</i>VAULT</a>

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
                <a class="nav-link text-white" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="user_products.php">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">
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
