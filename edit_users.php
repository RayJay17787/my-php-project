<?php
session_start();

$id = $_GET['id'];

$conn = mysqli_connect('localhost', 'root', '', 'gaming_store');
$query = "SELECT * FROM customers WHERE id = $id";
$result = mysqli_query($conn, $query);

$total = mysqli_fetch_assoc($result);

$dob_parts = explode('-', $total['dob']); 
$saved_day = $dob_parts[0];
$saved_month = $dob_parts[1]; 
$saved_year = $dob_parts[2];

include 'adminheader.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit <?= $total['name']; ?></title>
</head>

<body>
    <div class="container pt-3 pt-md-5 pb-3 pb-md-5  mt-5">
        <div class="row justify-content-center">
            <div class=" col-md-8 col-lg-6 ">
                <h1 class="text-dark fw-bold text-center mb-3 mb-md-4" style="font-size: 48px; font-style: italic;">
                    GAMEVAULT</h1>

                <div class="card p-3 p-md-4">
                    <h2 class="fw-bold fs-4 text-center">Edit Info For <?= $total['name']; ?></h2>
                    <hr class="mb-3 mt-3">

                    <form action="update_users.php" method="POST">

                        <input name="id" type="text" value="<?= $total['id'];?>" hidden>

                        <div class="row g-2 mb-3">
                            <div class="col-12 col-sm-6 w-100">
                                <label class="form-label">First name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name"
                                    placeholder="First name" value="<?= $total['name'];?>">
                                <span id="first_name_error" class="text-danger small"></span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Date of birth</label>
                            <div class="row g-2">
                                <div class="col-4">
                                    <select class="form-select" name="day" id="day">
                                        <option>day</option>
                                        <option <?= ($saved_day == '1') ? 'selected' : ''; ?>>1</option>
                                        <option <?= ($saved_day == '2') ? 'selected' : ''; ?>>2</option>
                                        <option <?= ($saved_day == '3') ? 'selected' : ''; ?>>3</option>
                                        <option <?= ($saved_day == '4') ? 'selected' : ''; ?>>4</option>
                                        <option <?= ($saved_day == '5') ? 'selected' : ''; ?>>5</option>
                                        <option <?= ($saved_day == '6') ? 'selected' : ''; ?>>6</option>
                                        <option <?= ($saved_day == '7') ? 'selected' : ''; ?>>7</option>
                                        <option <?= ($saved_day == '8') ? 'selected' : ''; ?>>8</option>
                                        <option <?= ($saved_day == '9') ? 'selected' : ''; ?>>9</option>
                                        <option <?= ($saved_day == '10') ? 'selected' : ''; ?>>10</option>
                                        <option <?= ($saved_day == '11') ? 'selected' : ''; ?>>11</option>
                                        <option <?= ($saved_day == '12') ? 'selected' : ''; ?>>12</option>
                                        <option <?= ($saved_day == '13') ? 'selected' : ''; ?>>13</option>
                                        <option <?= ($saved_day == '14') ? 'selected' : ''; ?>>14</option>
                                        <option <?= ($saved_day == '15') ? 'selected' : ''; ?>>15</option>
                                        <option <?= ($saved_day == '16') ? 'selected' : ''; ?>>16</option>
                                        <option <?= ($saved_day == '17') ? 'selected' : ''; ?>>17</option>
                                        <option <?= ($saved_day == '18') ? 'selected' : ''; ?>>18</option>
                                        <option <?= ($saved_day == '19') ? 'selected' : ''; ?>>19</option>
                                        <option <?= ($saved_day == '20') ? 'selected' : ''; ?>>20</option>
                                        <option <?= ($saved_day == '21') ? 'selected' : ''; ?>>21</option>
                                        <option <?= ($saved_day == '22') ? 'selected' : ''; ?>>22</option>
                                        <option <?= ($saved_day == '23') ? 'selected' : ''; ?>>23</option>
                                        <option <?= ($saved_day == '24') ? 'selected' : ''; ?>>24</option>
                                    </select>
                                    <span id="days_error" class="text-danger small d-block"></span>
                                </div>
                                <div class="col-4">
                                    <select class="form-select" name="month" id="month">
                                        <option>month</option>
                                        <option <?= ($saved_month == 'Jan') ? 'selected' : ''; ?>>Jan</option>
                                        <option <?= ($saved_month == 'Feb') ? 'selected' : ''; ?>>Feb</option>
                                        <option <?= ($saved_month == 'Mar') ? 'selected' : ''; ?>>Mar</option>
                                        <option <?= ($saved_month == 'Apr') ? 'selected' : ''; ?>>Apr</option>
                                        <option <?= ($saved_month == 'May') ? 'selected' : ''; ?>>May</option>
                                        <option <?= ($saved_month == 'Jun') ? 'selected' : ''; ?>>Jun</option>
                                        <option <?= ($saved_month == 'Jul') ? 'selected' : ''; ?>>Jul</option>
                                        <option <?= ($saved_month == 'Aug') ? 'selected' : ''; ?>>Aug</option>
                                        <option <?= ($saved_month == 'Sep') ? 'selected' : ''; ?>>Sep</option>
                                        <option <?= ($saved_month == 'Oct') ? 'selected' : ''; ?>>Oct</option>
                                        <option <?= ($saved_month == 'Nov') ? 'selected' : ''; ?>>Nov</option>
                                        <option <?= ($saved_month == 'Dec') ? 'selected' : ''; ?>>Dec</option>
                                    </select>
                                    <span id="months_error" class="text-danger small d-block"></span>
                                </div>
                                <div class="col-4">
                                    <select class="form-select" name="year" id="year">
                                        <option>year</option>
                                        <option <?= ($saved_year == '2013') ? 'selected' : ''; ?>>2013</option>
                                        <option <?= ($saved_year == '2012') ? 'selected' : ''; ?>>2012</option>
                                        <option <?= ($saved_year == '2011') ? 'selected' : ''; ?>>2011</option>
                                        <option <?= ($saved_year == '2010') ? 'selected' : ''; ?>>2010</option>
                                        <option <?= ($saved_year == '2009') ? 'selected' : ''; ?>>2009</option>
                                        <option <?= ($saved_year == '2008') ? 'selected' : ''; ?>>2008</option>
                                        <option <?= ($saved_year == '2007') ? 'selected' : ''; ?>>2007</option>
                                        <option <?= ($saved_year == '2006') ? 'selected' : ''; ?>>2006</option>
                                        <option <?= ($saved_year == '2005') ? 'selected' : ''; ?>>2005</option>
                                        <option <?= ($saved_year == '2004') ? 'selected' : ''; ?>>2004</option>
                                        <option <?= ($saved_year == '2003') ? 'selected' : ''; ?>>2003</option>
                                        <option <?= ($saved_year == '2002') ? 'selected' : ''; ?>>2002</option>
                                        <option <?= ($saved_year == '2001') ? 'selected' : ''; ?>>2001</option>
                                        <option <?= ($saved_year == '2000') ? 'selected' : ''; ?>>2000</option>
                                        <option <?= ($saved_year == '1999') ? 'selected' : ''; ?>>1999</option>
                                        <option <?= ($saved_year == '1998') ? 'selected' : ''; ?>>1998</option>
                                        <option <?= ($saved_year == '1997') ? 'selected' : ''; ?>>1997</option>
                                        <option <?= ($saved_year == '1996') ? 'selected' : ''; ?>>1996</option>
                                        <option <?= ($saved_year == '1995') ? 'selected' : ''; ?>>1995</option>
                                        <option <?= ($saved_year == '1994') ? 'selected' : ''; ?>>1994</option>
                                        <option <?= ($saved_year == '1993') ? 'selected' : ''; ?>>1993</option>
                                        <option <?= ($saved_year == '1992') ? 'selected' : ''; ?>>1992</option>
                                        <option <?= ($saved_year == '1991') ? 'selected' : ''; ?>>1991</option>
                                        <option <?= ($saved_year == '1990') ? 'selected' : ''; ?>>1990</option>
                                    </select>
                                    <span id="years_error" class="text-danger small d-block"></span>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label d-block">Gender</label>
                            <div class="d-flex flex-wrap gap-2 gap-sm-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male"
                                        <?= ($total['gender'] == 'male') ? 'checked' : ''; ?>>
                                    <label class="form-check-label">Male</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female"
                                        <?= ($total['gender'] == 'female') ? 'checked' : ''; ?>>
                                    <label class="form-check-label">Female</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="custom" value="custom"
                                        <?= ($total['gender'] == 'custom') ? 'checked' : ''; ?>>
                                    <label class="form-check-label">Custom</label>
                                </div>
                            </div>
                            <span id="gender_error" class="text-danger small d-block"></span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="email address"
                                name="email" value="<?= $total['email']; ?>">
                            <span id="email_error" class="text-danger small d-block"></span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Contact</label>
                            <input type="text" class="form-control" id="contact" name="contact"
                                placeholder="03323098292" value="<?= $total['phone']; ?>">
                            <span id="contact_error" class="text-danger small d-block"></span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="password">
                            <span id="password_error" class="text-danger small d-block"></span>
                        </div>
                        <div class="text-center mb-3 ">
                            <button name="submitButton" type="submit" onclick="formsub(event)" class="btn btn-success px-4 px-md-5 mt-3">Update <b><?= $total['name'];?></b></button>
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
            document.getElementById('contact_error').innerHTML = "";
            document.getElementById('days_error').innerHTML = "";
            document.getElementById('months_error').innerHTML = "";
            document.getElementById('years_error').innerHTML = "";
            document.getElementById('gender_error').innerHTML = "";

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