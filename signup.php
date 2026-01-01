<?php
$conn = mysqli_connect('localhost', 'root', '', 'gaming_store');

if (isset($_POST['signupButton'])) {
    $name = $_POST['first_name'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $dob = $day . "-" . $month . "-" . $year;

    $gender = $_POST['gender'];

    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['contact'];

    $query = "INSERT INTO customers(name,dob,gender,email,password,phone) values('$name','$dob','$gender','$email','$password','$phone')";

    mysqli_query($conn, $query);

    header("Location: signin.php");
    exit();
}
include 'guestheader.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAMEVAULT sign in</title>
    <style>
        body {
            background-image: url('images/rockstar-games-officially-announces-red-dead-redemption-2-maad1e2f619t85vx.jpg');
            background-size: cover;
            padding-top: 100px;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
        }
    </style>

</head>


<body>


    <div class="container pt-3 pt-md-5 pb-3 pb-md-5  mt-5">
        <div class="row justify-content-end">
            <div class=" col-md-8 col-lg-6 ">
                <h1 class="text-light fw-bold text-center mb-3 mb-md-4" style="font-size: 48px; font-style: italic;">
                    GAMEVAULT</h1>

                <div class="card p-3 p-md-4">
                    <h2 class="fw-bold fs-4 text-center">Create a new account</h2>
                    <hr class="mb-3 mt-3">

                    <form action="" method="POST">
                        <div class="row g-2 mb-3">
                            <div class="col-12 col-sm-6 w-100">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name"
                                    placeholder="Enter your name">
                                <span id="first_name_error" class="text-danger small"></span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Date of birth</label>
                            <div class="row g-2">
                                <div class="col-4">
                                    <select class="form-select" name="day" id="day">
                                        <option>day</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>16</option>
                                        <option>17</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>
                                        <option>21</option>
                                        <option>22</option>
                                        <option>23</option>
                                        <option>24</option>
                                    </select>
                                    <span id="days_error" class="text-danger small d-block"></span>
                                </div>
                                <div class="col-4">
                                    <select class="form-select" name="month" id="month">
                                        <option>month</option>
                                        <option>Jan</option>
                                        <option>Feb</option>
                                        <option>Mar</option>
                                        <option>Apr</option>
                                        <option>May</option>
                                        <option>Jun</option>
                                        <option>Jul</option>
                                        <option>Aug</option>
                                        <option>Sep</option>
                                        <option>Oct</option>
                                        <option>Nov</option>
                                        <option>Dec</option>
                                    </select>
                                    <span id="months_error" class="text-danger small d-block"></span>
                                </div>
                                <div class="col-4">
                                    <select class="form-select" name="year" id="year">
                                        <option>year</option>
                                        <option>2013</option>
                                        <option>2012</option>
                                        <option>2011</option>
                                        <option>2010</option>
                                        <option>2009</option>
                                        <option>2008</option>
                                        <option>2007</option>
                                        <option>2006</option>
                                        <option>2005</option>
                                        <option>2004</option>
                                        <option>2003</option>
                                        <option>2002</option>
                                        <option>2001</option>
                                        <option>2000</option>
                                        <option>1999</option>
                                        <option>1998</option>
                                        <option>1997</option>
                                        <option>1996</option>
                                        <option>1995</option>
                                        <option>1994</option>
                                        <option>1993</option>
                                        <option>1992</option>
                                        <option>1991</option>
                                        <option>1990</option>
                                    </select>
                                    <span id="years_error" class="text-danger small d-block"></span>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label d-block">Gender</label>
                            <div class="d-flex flex-wrap gap-2 gap-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                    <label class="form-check-label">Male</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="female"
                                        value="female">
                                    <label class="form-check-label">Female</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="custom"
                                        value="custom">
                                    <label class="form-check-label">Custom</label>
                                </div>
                            </div>
                            <span id="gender_error" class="text-danger small d-block"></span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="email address"
                                name="email">
                            <span id="email_error" class="text-danger small d-block"></span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contact</label>
                            <input type="number" class="form-control" id="contact" name="contact"
                                placeholder="03323098292">
                            <span id="contact_error" class="text-danger small d-block"></span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="password">
                            <span id="password_error" class="text-danger small d-block"></span>
                        </div>
                        <div class="text-center mb-3 ">
                            <button name = "signupButton" type="submit" onclick="formsub(event)" class="btn btn-dark px-4 px-md-5 mt-3">Sign
                                Up</button>
                        </div>

                        <div class="text-center">
                            <a href="sign in.html" target="_blank"
                                class="text-decoration-none fw-semibold text-black">Already have an account?</a>
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
            document.getElementById('contact_error').innerHTML = "";
            document.getElementById('days_error').innerHTML = "";
            document.getElementById('months_error').innerHTML = "";
            document.getElementById('years_error').innerHTML = "";
            document.getElementById('gender_error').innerHTML = "";






            var firstName = document.getElementById('first_name').value
            if (firstName != '') {
                var firstNameRegex = /^[a-zA-Z]{1,1000}$/
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

            var Contact = document.getElementById('contact').value
            if (Contact != '') {
                var ContactRegex = /^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{5})(?: *x(\d+))?\s*$/



                var TestContact = ContactRegex.test(Contact)
                if (TestContact == false) {
                    document.getElementById('contact_error').innerHTML = "range is 11 to 12 digit use + - and numeric values"
                    event.preventDefault();
                }
            } else {
                document.getElementById('contact_error').innerHTML = "enter Contact number please"
                event.preventDefault();

            }
            var day = document.getElementById('day').value
            if (day == 'day') {
                document.getElementById('days_error').innerHTML = "please select day";
                event.preventDefault();
            }

            var month = document.getElementById('month').value
            if (month == 'month') {
                document.getElementById('months_error').innerHTML = "please select month";
                event.preventDefault();
            }

            var year = document.getElementById('year').value
            if (year == 'year') {
                document.getElementById('years_error').innerHTML = "please select year";
                event.preventDefault();
            }

            var gender1 = document.getElementById('male');
            var gender2 = document.getElementById('female');
            var gender3 = document.getElementById('custom');

            if (gender1.checked == true) {} else if (gender2.checked == true) {} else if (gender3.checked == true) {} else {
                document.getElementById('gender_error').innerHTML = "please select a gender";
                event.preventDefault();
            }

        }
    </script>
</body>

</html>

<?php
include 'footer.php'
?>