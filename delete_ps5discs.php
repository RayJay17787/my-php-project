<?php
    $conn = mysqli_connect('localhost', 'root', '', 'gaming_store');
    $id = $_GET['id'];
    $query = "UPDATE products SET status = 'inactive' WHERE id = $id";

    $result = mysqli_query($conn, $query);

    header("Location: ps5discs.php");
    exit();
?>