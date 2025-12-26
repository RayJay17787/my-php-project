<?php
// session_start();
$conn = mysqli_connect('localhost', 'root', '', 'gaming_store');

if (!isset($_SESSION['customer'])) {
    header("Location: signin.php");
    exit();
}
$user = $_SESSION['customer'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Vault - Navigation</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="font-family: 'Montreal', sans-serif;" class="d-flex flex-column min-vh-100">


    <div class="fixed-top" style="background-color: #020003;">
        <nav class="navbar shadow" style="height: 75px;">
            <button class="btn btn-link text-white form-text" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#sidebar">
                <i class="fa-solid fa-bars fw-bold fs-4"></i>
            </button>
            <a class="navbar-brand ms-2 text-white fw-bold fst-italic form-text ms-3 fs-4"
                href="storefront.php">GAMEVAULT</a>

            <form class="d-flex mx-auto" style="width: 500px;">
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="Search entire store here..." id="search"
                        name="search">
                    <button class="btn btn-danger" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>

            <ul class="navbar-nav d-flex flex-row gap-4 me-5">
                <li class="nav-item form-text">
                    <a class="nav-link text-white fs-6 fw-semibold" href="user.php">Home</a>
                </li>
                <li class="nav-item form-text">
                    <a class="nav-link text-white fs-6 fw-semibold" href="user_products.php">Product</a>
                </li>
                <li class="nav-item form-text">
                    <a class="nav-link text-white fs-6 fw-semibold" href="contact.php">Contact</a>
                </li>
                <li class="nav-item form-text">
                    <a class="nav-link text-white fs-6 fw-semibold" href="signin.php">
                        <i class="fa-solid fa-right-to-bracket me-1"></i><?= $user['name']; ?>
                    </a>
                </li>
                <li class="nav-item form-text">
                    <a class="nav-link text-white fs-6 fw-semibold" href="signout.php">
                        <i class="fa-solid fa-user-plus me-1"></i> Sign Out
                    </a>
                </li>
                <li class="nav-item form-text">
                    <a class="nav-link text-white fs-6 fw-semibold" href="#" data-bs-toggle="offcanvas"
                        data-bs-target="#shoppingcart">
                        <i class="fa-solid fa-cart-shopping"></i> (0)
                    </a>
                </li>
            </ul>
        </nav>
    </div>




    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" style="width: 300px; background-color: #ffffff;">
        <div class="offcanvas-header text-white" style="background-color: #08010e;">
            <h5 class="offcanvas-title">Categories</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body p-0">
            <div class="list-group list-group-flush">
                <a href="ps5.php" class="list-group-item list-group-item-action ps-4">
                    <i class="fa-brands fa-playstation me-2"></i> PlayStation 5
                </a>
                <a href="ps4.php" class="list-group-item list-group-item-action ps-4">
                    <i class="fa-brands fa-playstation me-2" style="color: #1521a4;"></i> PlayStation 4
                </a>
                <a href="xbox.php" class="list-group-item list-group-item-action ps-4">
                    <i class="fa-brands fa-xbox me-2"></i> Xbox
                </a>
                <a href="nintendo.php" class="list-group-item list-group-item-action ps-4">
                    <i class="fa-brands fa-steam-symbol me-2" style="color: red;"></i> Nintendo Switch
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

    <script>
        history.pushState(null, null, location.href);
        window.onpopstate = function () {
            history.go(1);
        };
    </script>
</body>

</html>