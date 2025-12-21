<?php
    $conn = mysqli_connect('localhost', 'root','','gaming_store');

    if(!isset($_SESSION['admin'])){
        header("Location: signin.php");
        exit();
    }
    $admin = $_SESSION['admin'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Vault - Navigation</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
</head>

<body style="font-family: 'Montreal', sans-serif; margin-left: 300px;" class="d-flex flex-column min-vh-100">


    <div class="fixed-top" style="background-color: #020003; margin-left: 300px;">
        <nav class="navbar">
            <a class="navbar-brand ms-2 text-white fw-bold fst-italic form-text ms-3 fs-4" href="#">GAMEVAULT</a>

            <form class="d-flex mx-auto" style="width: 500px;">
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="Search entire store here..." id="search"
                        name="search">
                    <button class="btn btn-danger" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>

            <ul class="navbar-nav d-flex flex-row gap-3 me-4">
                <li class="nav-item form-text">
                    <a class="nav-link text-white fs-6 fw-semibold" href="storefront.php">Home</a>
                </li>
                <li class="nav-item form-text">
                    <a class="nav-link text-white fs-6 fw-semibold" href="products.php">Product</a>
                </li>
                <li class="nav-item form-text">
                    <a class="nav-link text-white fs-6 fw-semibold" href="contact.php">Contact</a>
                </li>
                <li class="nav-item form-text">
                    <a class="nav-link text-white fs-6 fw-semibold" href="signin.php">
                        <i class="fa-solid fa-right-to-bracket me-1"></i> <?= $admin['username']; ?>
                    </a>
                </li>

                <li class="nav-item form-text">
                    <a class="nav-link text-white fs-6 fw-semibold" href="signout.php">
                        <i class="fa-solid fa-right-from-bracket me-1"></i> Sign Out
                    </a>
                </li>
            </ul>
        </nav>
    </div>




    <div class="position-fixed start-0 top-0 h-100" style="width: 300px; background-color: #ffffff; z-index: 1050;">
        <div class="text-white p-3" style="background-color: #08010e;">
            <h5>Admin Panel</h5>
        </div>
        <div class="p-0">
            <div class="list-group list-group-flush">
                <a href="dashboard.php" class="list-group-item list-group-item-action ps-4">
                    <i class="fa-solid fa-grip  me-2"></i> dashboard
                </a>
                <a href="users.php" class="list-group-item list-group-item-action ps-4">
                    <i class="fa-solid fa-users  me-2"></i> users
                </a>
                <a href="admin.php" class="list-group-item list-group-item-action ps-4">
                    <i class="fa-solid fa-user-tie  me-2"></i> admins </a>
                     <a href="orders.php" class="list-group-item list-group-item-action ps-4">
                    <i class="fa-solid fa-basket-shopping  me-2"></i>orders
                </a>
                <a href="ps5discs.php" class="list-group-item list-group-item-action ps-4">
                    <i class="fa-brands fa-playstation me-2"></i> PlayStation 5 discs
                </a>
                <a href="ps4discs.php" class="list-group-item list-group-item-action ps-4">
                    <i class="fa-brands fa-playstation me-2" style="color: #1521a4;"></i> PlayStation 4 discs
                </a>
                <a href="xboxdiscs.php" class="list-group-item list-group-item-action ps-4">
                    <i class="fa-brands fa-xbox me-2"></i> Xbox discs
                </a>
                <a href="nintendodiscs.php" class="list-group-item list-group-item-action ps-4">
                    <i class="fa-brands fa-steam-symbol me-2" style="color: red;"></i> Nintendo Switch discs
                </a>
            </div>
        </div>
    </div>


    <div class="offcanvas offcanvas-end" tabindex="-1" id="shoppingcart"
        style="width: 400px; background-color: rgb(255, 255, 255);">
        <div class="offcanvas-header text-white" style="background-color: #0d0117;">
            <h5 class="offcanvas-title">Cart</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body p-0">
            <div class="text-center py-5">
                <i class="fa-solid fa-cart-shopping fs-1 text-muted mb-3"></i>
                <p class="text-muted">Your cart is empty</p>
            </div>
        </div>
    </div>


</body>

</html>