<?php
    $conn = mysqli_connect('localhost', 'root', '', 'gaming_store');

    if(isset($_POST['submitButton'])){
        $id = $_POST['id'];
    
        $name = $_POST['first_name'];

        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $query = "UPDATE users
                  SET username = '$name',
                      email = '$email',
                      password = '$password'
                      WHERE id = $id";
    
        mysqli_query($conn, $query);
    
        header("Location: admin.php");
        exit();
    }

    if(isset($_POST['cancelButton'])){
        header("Location: admin.php");
    }
?>