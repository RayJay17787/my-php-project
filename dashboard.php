<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'gaming_store');

if (!isset($_SESSION['admin'])) {
    header("Location: signin.php");
    exit();
}

$admin = $_SESSION['admin'];

include 'adminheader.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
</head>

<body>
    <div class="container my-5 py-5">
        <center>
            <h1>Welcome, <?php echo $admin['username']; ?>! <br><br> This is the dashboard!</h1>
        </center>
    </div>

    <script>
        history.pushState(null, null, location.href);
        window.onpopstate = function() {
        history.go(1);
        };
    </script>
</body>

</html>