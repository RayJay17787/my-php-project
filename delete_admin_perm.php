<?php
    $conn = mysqli_connect('localhost','root','','gaming_store');

    $id = $_GET['id'];

    $query = "DELETE FROM users WHERE id = $id";

    mysqli_query($conn, $query);

    header("Location: admin.php?filter=delAdmin");
?>