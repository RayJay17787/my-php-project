<?php
    session_start();
    $conn = mysqli_connect('localhost', 'root','','gaming_store');

    if(!isset($_SESSION['admin'])){
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
</head>

<body>
    <div class="container my-5 py-5">
        <center>
            <h1>Welcome, <?php echo $admin['username'];?>!, This is the dashboard!</h1>
        </center>
    </div>
</body>

</html>
<?php
include 'footer.php';

?>