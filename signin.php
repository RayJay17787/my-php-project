<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'gaming_store');

if (isset($_POST['signinButton'])) {
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];

    $adminQuery = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $customerQuery = "SELECT * FROM customers WHERE email = '$email' AND password = '$password'";

    $adminResult = mysqli_query($conn, $adminQuery);
    $customerResult = mysqli_query($conn, $customerQuery);

    $adminRow = mysqli_num_rows($adminResult);
    $customerRow = mysqli_num_rows($customerResult);


    if ($adminRow == 1) {
        $admin = mysqli_fetch_assoc($adminResult);
        $_SESSION['admin'] = $admin;

        header("Location: dashboard.php");
        exit();
    } elseif ($customerRow == 1) {
        $customer = mysqli_fetch_assoc($customerResult);
        $_SESSION['customer'] = $customer;

        header("Location: user.php");
        exit();
    } else {
        header("Location: signin.php?error=1");
        exit();
    }
}

if (isset($_SESSION['admin'])) {
    session_start();
    header("Location: dashboard.php");
    exit();
}

if (isset($_SESSION['customer'])) {
    header("Location: user.php");
    exit();
}

if (isset($_GET['error'])) {
    echo "<script>
      alert('User Not Found')
      window.history.replaceState({}, document.title, 'signin.php')
    </script>";
}


include 'guestheader.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAMEVAULT - Sign In</title>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <style>
        body {
            background-image: url('images/ChatGPT%20Image%20Dec%209,%202025,%2002_36_10%20PM.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
        }
    </style>

</head>

<body>

    <div class="container pt-3 pt-md-5 pb-3 pb-md-5 py-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <h1 class="text-dark fw-bold text-center mb-3 mb-md-4" style="font-size: 48px; font-style: italic;">
                    GAMEVAULT</h1>

                <div class="card p-3 p-md-4">
                    <h2 class="fw-bold fs-4 text-center">Sign In to your account</h2>
                    <hr class="mb-3 mt-3">

                    <form action="" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="email address"
                                name="email">
                            <span id="email_error" class="text-danger small d-block"></span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="password">
                            <span id="password_error" class="text-danger small d-block"></span>
                        </div>

                        <div class="text-center mb-3">
                            <button name="signinButton" type="submit" onclick="formsub(event)" class="btn btn-dark px-4 px-md-5 mt-3">Sign
                                In</button>
                        </div>

                        <div class="text-center">
                            <a href="singup.html" target="_blank"
                                class="text-decoration-none fw-semibold text-black">Don't have an account? Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function formsub(event) {

            document.getElementById('email_error').innerHTML = "";
            document.getElementById('password_error').innerHTML = "";

            var Email = document.getElementById('email').value
            if (Email != '') {
                var EmailRegex = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]{1,100}$/
                var TestEmail = EmailRegex.test(Email)
                if (TestEmail == false) {
                    document.getElementById('email_error').innerHTML = "enter valid value please"
                    event.preventDefault();
                }
            } else {
                document.getElementById('email_error').innerHTML = "enter email value please"
                event.preventDefault();
            }

            var Pass = document.getElementById('password').value
            if (Pass != '') {
                var PassRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{8,16}$/;
                var TestPass = PassRegex.test(Pass)
                if (TestPass == false) {
                    document.getElementById('password_error').innerHTML = "Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character:"
                    event.preventDefault();
                }
            } else {
                document.getElementById('password_error').innerHTML = "enter password please"
                event.preventDefault();
            }
        }
    </script>
</body>

</html>
<?php
include 'footer.php'
?>