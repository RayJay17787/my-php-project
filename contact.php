<?php
include 'userheader.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>contact Form</title>
</head>

<body>

    <div class="container my-5 py-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <center><I>
                        <h1 class="fw-bold mb-4">GAMEVAULT</h1>
                    </I></center>
                <div style="border: none;" class="card border rounded shadow">
                    <h3 class="d-flex justify-content-center mt-3">Contact form</h3>
                    <div class="card-body">
                        <form>
                            <div class="input-group mb-3">
                                <!--<label class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="Enter your name">-->
                                <span class="input-group-text">Name</span>
                                <input type="text" class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="input-group mb-3">
                                <!--<label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="Enter your email">-->
                                <span class="input-group-text">Email</span>
                                <input type="text" class="form-control" placeholder="Enter your email">
                            </div>
                            <div class="input-group mb-3">
                                <!--<label class="form-label">Contact</label>
                                <input type="text" class="form-control" placeholder="Enter contact number">-->
                                <span class="input-group-text">Contact</span>
                                <input type="text" class="form-control" placeholder="Enter your contact">
                            </div>
                            <button type="submit" class="btn btn-danger w-100">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
include 'footer.php';
?>