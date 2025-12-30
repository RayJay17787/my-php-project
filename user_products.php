<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'gaming_store');

if (!isset($_SESSION['customer'])) {
    header("Location: signin.php");
    exit();
}

include 'userheader.php';

$search = "";
if (isset($_GET['search'])) {
    $search = $_GET['search'];
}

$query = "SELECT * FROM products WHERE 
          name LIKE '%$search%' OR 
          company LIKE '%$search%' OR 
          platform LIKE '%$search%'";

$result = mysqli_query($conn, $query);
?>

<div class="container p-5 mt-5">
    <div class="row g-4">
        <h1 class="text-center mb-3"><b>Products</b></h1>
        
        <?php
        while ($total = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card border shadow-sm h-100">
                    <a class="text-decoration-none text-dark" href="product_info.php?id=<?php echo $total['id']; ?>">
                        <img src="images/<?php echo $total['image']; ?>" class="card-img-top" alt="Product" style="height: 300px;">
                        <div class="card-body">
                            <b><?php echo $total['name']; ?></b><br>
                            <?php echo $total['company']; ?><br>
                            <?php echo $total['platform']; ?>
                        </div>
                    </a>
                    <div class="card-body">
                        <p class="text-danger fw-bold">Rs. <?php echo $total['price']; ?></p>
                        <a href="product_info.php?id=<?php echo $total['id']; ?>" class="btn btn-danger w-100">
                           View Details
                        </a>
                    </div>
                </div>
            </div>
            <?php
        }
        if (mysqli_num_rows($result) == 0) {
            echo "<h3 class='text-center'>No games found!</h3>";
        }
        ?>
    </div>
</div>