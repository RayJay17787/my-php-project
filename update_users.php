<?php
    $conn = mysqli_connect('localhost', 'root', '', 'gaming_store');

    if(isset($_POST['submitButton'])){
        $id = $_POST['id'];
    
        $name = $_POST['first_name'];
    
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $dob = $day . "-" . $month . "-" . $year;
    
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['contact'];
    
        $query = "UPDATE customers
                  SET name = '$name',
                      dob = '$dob',
                      gender = '$gender',
                      email = '$email',
                      password = '$password',
                      phone = '$phone'
                      WHERE id = $id";
    
        mysqli_query($conn, $query);
    
        header("Location: users.php");
        exit();
    }

    if(isset($_POST['cancelButton'])){
        header("Location: users.php");
    }
?>