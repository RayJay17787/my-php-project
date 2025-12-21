<?php
session_start();

$id = $_GET['id'];

$conn = mysqli_connect('localhost', 'root', '', 'gaming_store');
$query = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($conn, $query);

$total = mysqli_fetch_assoc($result);

include 'adminheader.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit <?= $total['username']; ?></title>
</head>

<body>
    <div class="container pt-3 pt-md-5 pb-3 pb-md-5  mt-5">
        <div class="row justify-content-center">
            <div class=" col-md-8 col-lg-6 ">
                <h1 class="text-dark fw-bold text-center mb-3 mb-md-4" style="font-size: 48px; font-style: italic;">
                    GAMEVAULT</h1>

                <div class="card p-3 p-md-4">
                    <h2 class="fw-bold fs-4 text-center">Edit Info For <?= $total['username']; ?></h2>
                    <hr class="mb-3 mt-3">

                    <form action="update_admin.php" method="POST">

                        <input name="id" type="text" value="<?= $total['id'];?>" hidden>

                        <div class="row g-2 mb-3">
                            <div class="col-12 col-sm-6 w-100">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name"
                                    placeholder="First name" value="<?= $total['username'];?>">
                                <span id="first_name_error" class="text-danger small"></span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="email address"
                                name="email" value="<?= $total['email']; ?>">
                            <span id="email_error" class="text-danger small d-block"></span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="password">
                            <span id="password_error" class="text-danger small d-block"></span>
                        </div>
                        <div class="text-center mb-3 ">
                            <button name="submitButton" type="submit" onclick="formsub(event)" class="btn btn-success px-4 px-md-5 mt-3">Update <b><?= $total['username'];?></b></button>
                            <button name="cancelButton" type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger px-4 px-md-5 mt-3">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        function formsub(event) {
            document.getElementById('first_name_error').innerHTML = "";
            document.getElementById('email_error').innerHTML = "";
            document.getElementById('password_error').innerHTML = "";

            var firstName = document.getElementById('first_name').value
            if (firstName != '') {
                var firstNameRegex = /^[a-zA-Z\s]{1,1000}$/
                var testFirstName = firstNameRegex.test(firstName)
                if (testFirstName == false) {
                    document.getElementById('first_name_error').innerHTML = "enter valid value please"
                    event.preventDefault();
                }
            } else {
                document.getElementById('first_name_error').innerHTML = "enter first name value please"
                event.preventDefault();
            }

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
                var PassRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{8,50}$/;
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