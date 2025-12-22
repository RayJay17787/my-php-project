<?php
    $conn = mysqli_connect('localhost', 'root', '', 'gaming_store');
    $id = $_GET['id'];
    $query = "DELETE FROM products WHERE id = $id";

    $result = mysqli_query($conn, $query);

    header("Location: ps4discs.php");
    exit();
?>