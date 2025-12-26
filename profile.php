<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'gaming_store');

if (isset($_SESSION['admin'])) {
    $admin = $_SESSION['admin'];
    $loggedin = 'admin';
    include 'adminheader.php';

    if (isset($_POST['back'])) {
        header("Location: dashboard.php");
        exit();
    }
}

elseif (isset($_SESSION['customer'])) {
    $user = $_SESSION['customer'];
    $loggedin = 'user';
    include 'userheader.php';

    if (isset($_POST['back'])) {
        header("Location: user.php");
        exit();
    }
}
?>

<body style="overflow: hidden;">
    <div class="container-fluid px-5 py-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <h2 class="text-dark fw-bold text-center mb-2" style="font-size: 48px;">Profile</h2>

                <div style="border: none;" class="card p-3 rounded-4">
                    <img src="images/user_131563.png" class="d-block rounded-circle mx-auto shadow-sm mb-3 my-3 "
                        style="width: 150px; height: 150px; " alt="Profile">
                    <hr class="fw-bolder text-success">

                    <form action="" method="POST">
                        <div class="mb-3 fw-semibold">
                            <?php
                            if ($loggedin == 'admin') {
                            ?>
                                <label class="form-label">Name</label>
                                <input value="<?= $admin['username']; ?>" type="name" class="form-control" id="name" placeholder="Name" name="name" readonly>

                            <?php
                            } else {
                            ?>
                                <label class="form-label">Name</label>
                                <input value="<?= $user['name']; ?>" type="name" class="form-control" id="name" placeholder="Name" name="name" readonly>

                            <?php
                            }
                            ?>
                        </div>

                        <div class="mb-3">
                            <?php
                            if ($loggedin == 'admin') {
                            ?>
                                <label class="form-label fw-semibold">Email</label>
                                <input value="<?= $admin['email']; ?>" type="email" class="form-control" id="email" placeholder="Email Address" name="email" readonly>

                            <?php
                            } else {
                            ?>
                                <label class="form-label fw-semibold">Email</label>
                                <input value="<?= $user['email']; ?>" type="email" class="form-control" id="email" placeholder="Email Address" name="email" readonly>

                            <?php
                            }
                            ?>
                        </div>

                        <div class="mb-3">
                            <?php
                            if ($loggedin == 'admin') {
                            ?>
                                <label class="form-label fw-semibold">Degisnation</label>
                                <input value="Admin" type="text" class="form-control" id="desgination" name="Desgination" placeholder="desgination">

                            <?php
                            } else {
                            ?>
                                <label class="form-label fw-semibold">Degsination</label>
                                <input value="User" type="text" class="form-control" id="desgination" name="Desgination" placeholder="desgination">

                            <?php
                            }
                            ?>
                        </div>

                        <div class="text-center mb-1">
                            <a href="user.php">
                                <button name="back" type="button" class="btn btn-danger w-100 px-4 px-md-5 mt-3 rounded-3 ">Go
                                    back</button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>