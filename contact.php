<?php
session_start();

if (isset($_SESSION['admin'])) {
    $admin = $_SESSION['admin'];
    $loggedin = 'admin';
    include 'adminheader.php';

    if (isset($_POST['cancelButton'])) {
        header("Location: dashboard.php");
        exit();
    }
} elseif (isset($_SESSION['customer'])) {
    $user = $_SESSION['customer'];
    $loggedin = 'user';
    include 'userheader.php';

    if (isset($_POST['cancelButton'])) {
        header("Location: user.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>contact Form</title>
</head>

<body>

    <div class="container-fluid px-4 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <center><I>
                        <h1 class="fw-bold mb-4">GAMEVAULT</h1>
                    </I></center>
                <div style="border: none;" class="card border rounded shadow">
                    <h3 class="d-flex justify-content-center mt-3">Contact form</h3>
                    <div class="card-body">
                        <form method="POST">
                            <div class="input-group mb-3">
                                <?php
                                if ($loggedin == 'admin') {
                                ?>
                                    <span class="input-group-text">Name</span>
                                    <input value="<?= $admin['username']; ?>" type="text" class="form-control" placeholder="Enter your name">

                                <?php
                                } else {
                                ?>
                                    <span class="input-group-text">Name</span>
                                    <input type="text" value="<?= $user['name']; ?>" class="form-control" placeholder="Enter your name">

                                <?php
                                }
                                ?>
                            </div>
                            <div class="input-group mb-3">
                                <?php
                                if ($loggedin == 'admin') {
                                ?>
                                    <span class="input-group-text">Email</span>
                                    <input type="text" value="<?= $admin['email']; ?>" class="form-control" placeholder="Enter your email">

                                <?php
                                } else { ?>
                                    <span class="input-group-text">Email</span>
                                    <input type="text" value="<?= $user['email']; ?>" class="form-control" placeholder="Enter your email">
                                <?php
                                }
                                ?>
                            </div>
                            <div class="input-group mb-3">
                                <?php
                                if ($loggedin == 'admin') {
                                ?>
                                    <span class="input-group-text">Contact</span>
                                    <input type="text" class="form-control" placeholder="Enter your email">

                                <?php
                                } else { ?>
                                    <span class="input-group-text">Contact</span>
                                    <input type="text" value="<?= $user['phone']; ?>" class="form-control" placeholder="Enter your email">
                                <?php
                                }
                                ?>
                            </div>
                            <div class="input-group mb-4">
                                <span class="input-group-text">Description</span>
                                <input style="height: 100px;" type="text" class="form-control">
                            </div>
                            <div class="d-flex justify-content-center gap-2">
                                <button name="submitButton" type="submit" class="btn btn-success w-50">Submit</button>
                                <button name="cancelButton" type="submit" class="btn btn-danger w-50">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php
if($loggedin == 'user'){
   include 'footer.php'; 
}
?>