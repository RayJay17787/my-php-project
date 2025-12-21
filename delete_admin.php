<?php
    $conn = mysqli_connect('localhost', 'root', '', 'gaming_store');
    $id = $_GET['id'];
    $query = "DELETE FROM users WHERE id = $id";

    $result = mysqli_query($conn, $query);

    header("Location: admin.php");
    exit();
?>