<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'gaming_store');

if (isset($_POST['submitButton'])) {

    $disc = $_POST['discname'];
    $company = $_POST['company'];
    $platform = $_POST['platform'];
    $genre = $_POST['genre'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $image = $_POST['image'];

    $query = "INSERT INTO products(name,company,platform,genre,price,stock,image) values('$disc','$company','$platform','$genre','$price','$stock','$image')";

    mysqli_query($conn, $query);

    header("Location: nintendodiscs.php");
    exit();
}

if (isset($_POST['cancelButton'])){
    header("Location: nintendodiscs.php");
    exit();
}

include 'adminheader.php';
?>

<body>
    <div class="container pt-3 pt-md-5 pb-3 pb-md-5  mt-5">
        <div class="row justify-content-center">
            <div class=" col-md-8 col-lg-6 ">
                <h1 class="text-dark fw-bold text-center mb-3 mb-md-4" style="font-size: 48px; font-style: italic;">
                    GAMEVAULT</h1>

                <div class="card p-3 p-md-4">
                    <h2 class="fw-bold fs-4 text-center">Add A Nintendo Disc</h2>
                    <hr class="mb-3 mt-3">

                    <form action="" method="POST">
                        <div class="row g-2 mb-3">
                            <div class="input-group col-12 col-sm-6 w-100">
                                <span class="input-group-text">Disc Name</span>
                                <input type="text" class="form-control" id="disc_name" name="discname"
                                    placeholder="Disc name">
                            </div>
                            <span id="disc_error" class="text-danger small"></span>
                        </div>

                        <div class="row g-2 mb-3">
                            <div class="input-group col-12 col-sm-6 w-100">
                                <span class="input-group-text">Company</span>
                                <input type="text" class="form-control" id="company" name="company"
                                    placeholder="Company">
                            </div>
                            <span id="company_error" class="text-danger small"></span>
                        </div>

                        <div class="row g-2 mb-3">
                            <div class="input-group col-12 col-sm-6 w-100">
                                <span class="input-group-text">Platform</span>
                                <input type="text" class="form-control" id="platform" name="platform"
                                    value="Nintendo" readonly>
                            </div>
                            <span id="platform_error" class="text-danger small"></span>
                        </div>

                        <div class="row g-2 mb-3">
                            <div class="input-group col-12 col-sm-6 w-100">
                                <span class="input-group-text">Genre</span>
                                <input type="text" class="form-control" id="genre" name="genre"
                                    placeholder="Genre">
                            </div>
                            <span id="genre_error" class="text-danger small"></span>
                        </div>

                        <div class="row g-2 mb-3">
                            <div class="input-group col-12 col-sm-6 w-100">
                                <span class="input-group-text">Price</span>
                                <input type="text" class="form-control" id="price" name="price"
                                    placeholder="Price">
                            </div>
                            <span id="price_error" class="text-danger small"></span>
                        </div>

                        <div class="row g-2 mb-3">
                            <div class="input-group col-12 col-sm-6 w-100">
                                <span class="input-group-text">Stock</span>
                                <input type="text" class="form-control" id="stock" name="stock"
                                    placeholder="Stock">
                            </div>
                            <span id="stock_error" class="text-danger small"></span>
                        </div>

                        <div class="row g-2 mb-3">
                            <div class="input-group col-12 col-sm-6 w-100">
                                <span class="input-group-text">Image</span>
                                <input type="text" class="form-control" id="image" name="image"
                                    placeholder="Image">
                            </div>
                            <span id="image_error" class="text-danger small"></span>
                        </div>

                        <div class="text-center mb-3 ">
                            <button name="submitButton" type="submit" onclick="formsub(event)" class="btn btn-success px-4 px-md-5 mt-3">Add Disc</button>
                            <a href="nintendodiscs.php">
                                <button name="cancelButton" type="button" onclick="return confirm ('Are you sure?')" class="btn btn-danger px-4 px-md-5 mt-3">Cancel</button>
                            </a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function formsub(event) {


            document.getElementById('disc_error').innerHTML = "";
            document.getElementById('company_error').innerHTML = "";
            document.getElementById('platform_error').innerHTML = "";
            document.getElementById('genre_error').innerHTML = "";
            document.getElementById('price_error').innerHTML = "";
            document.getElementById('stock_error').innerHTML = "";
            document.getElementById('image_error').innerHTML = "";

            var DiscName = document.getElementById('disc_name').value
            if (DiscName == '') {
                document.getElementById('disc_error').innerHTML = "Please Insert a Value"
                event.preventDefault();
            }

            var CompanyName = document.getElementById('company').value
            if (CompanyName == '') {
                document.getElementById('company_error').innerHTML = "Please Insert a Value"
                event.preventDefault();
            }

            var PlatformName = document.getElementById('platform').value
            if (PlatformName == '') {
                document.getElementById('platform_error').innerHTML = "Please Insert a Value"
                event.preventDefault();
            }

            var GenreName = document.getElementById('genre').value
            if (GenreName == '') {
                document.getElementById('genre_error').innerHTML = "Please Insert a Value"
                event.preventDefault();
            }

            var ImageName = document.getElementById('image').value
            if (ImageName == '') {
                document.getElementById('image_error').innerHTML = "Please Insert a Value"
                event.preventDefault();
            }

            var stock = document.getElementById('stock').value
            if (stock == '') {
                document.getElementById('stock_error').innerHTML = "Please Insert a Value"
                event.preventDefault();
            }

            var price = document.getElementById('price').value
            if (price == '') {
                document.getElementById('price_error').innerHTML = "Please Insert a Value"
                event.preventDefault();
            }
        }
    </script>
</body>