<?php
    $conn = mysqli_connect('localhost', 'root', '', 'gaming_store');
    $id = $_GET['id'];
    $query = "UPDATE customers SET status = 'inactive' WHERE id = $id";

    $result = mysqli_query($conn, $query);

    header("Location: users.php");
    exit();
?>