<?php
    $conn = mysqli_connect('localhost','root','','gaming_store');

    $id = $_GET['id'];

    $query = "DELETE FROM customers WHERE id = $id";

    mysqli_query($conn, $query);

    header("Location: users.php?filter=delUser");
?>