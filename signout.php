<?php
    session_start();
    session_unset();
    $des = session_destroy();

    if(isset($des)){
        header("Location: storefront.php");
        exit();
    }
?>