<?php
include 'userheader.php'
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all Products</title>
</head>

<body>

    <div class="container  my-5 py-5 mt-4">
        <div class="row g-3 mb-5 mt-3">
            <h1 class="mb-3 mt-3 text-center text-decoration-underline">PRODUCTS</h1>
            <?php
            for ($i = 1; $i <= 20; $i++) {
                ?>
                <div class="col-md-4 py-5 px-3">
                    <div class="card text-center p-2">
                        <h5 class="mt-2">item <?php echo $i ?></h5>
                        <div class="d-flex justify-content-center">
                            <p class="mb-0 btn btn-danger w-50 ">$ <?php echo 30.00 + $i ?></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    </div>
</body>

</html>
<?php
include 'footer.php';
?>