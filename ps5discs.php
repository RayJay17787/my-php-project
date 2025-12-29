<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'gaming_store');

if (isset($_GET['filter'])) {
    $filter = $_GET['filter'];

    if ($filter == 'ps5') {
        $query = "SELECT * FROM products WHERE platform = 'Playstation 5' AND status = 'active'";
    } 
    
    elseif ($filter == 'ps4') {
        $query = "SELECT * FROM products WHERE platform = 'Playstation 4' AND status = 'active'";
    } 
    
    elseif ($filter == 'xbox') {
        $query = "SELECT * FROM products WHERE platform = 'Xbox' AND status = 'active'";
    } 
    
    elseif ($filter == 'nintendo') {
        $query = "SELECT * FROM products WHERE platform = 'Nintendo' AND status = 'active'";
    } 
    
    elseif ($filter == 'clear') {
        $query = "SELECT * FROM products WHERE status = 'active'";
    } 
    
    elseif ($filter == 'dlt') {
        $query = "SELECT * FROM products WHERE status = 'inactive'";
    } 
    
    else {
        $query = "SELECT * FROM products WHERE status = 'active'";
    }
} 

else {
    $query = "SELECT * FROM products WHERE status = 'active'";
}

$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);

include 'adminheader.php';
?>

<div class="container-fluid px-4 pt-2">
    <h1 class="text-center mb-4"><b>All Available Discs</b></h1>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h6 class="mb-0">Total Count: <?= $row ?> Items</h6>
        
        <div class="d-flex gap-2">
            <div class="dropdown">
                <button class="btn btn-success dropdown-toggle rounded-pill" type="button" data-bs-toggle="dropdown">
                    <i class="fa-solid fa-filter me-2"></i>Filter </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?filter=ps5"><i class="fa-brands fa-playstation me-2"></i> Playstation 5 Games</a></li>
                    <li><a class="dropdown-item" href="?filter=ps4"><i style="color: blue;" class="fa-brands fa-playstation me-2"></i> Playstation 4 Games</a></li>
                    <li><a class="dropdown-item" href="?filter=xbox"><i style="color: green;" class="fa-brands fa-xbox me-2"></i> Xbox Games</a></li>
                    <li><a class="dropdown-item" href="?filter=nintendo"><i style="color: red;" class="fa-solid fa-gamepad me-2"></i> Nintendo Games</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="?filter=clear"><i style="color: black;" class="fa-solid fa-xmark"></i> Clear</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="?filter=dlt"><i style="color: black;" class="fa-solid fa-trash"></i> Deleted Items</a></li>
                </ul>
            </div>
            <a href="create_ps5discs.php">
                <button class="btn btn-success rounded-pill">+ Add a Disc</button>
            </a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover text-center">
            <thead class="table-dark">
                <th>S.No</th>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Company</th>
                <th>Platform</th>
                <th>Genre</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Status</th>
                <th>Actions</th>
            </thead>
            <tbody>
                <?php
                $serial = 1;
                for ($i = 0; $i < $row; $i++) {
                    $total = mysqli_fetch_assoc($result);
                ?>
                    <tr>
                        <td><?= $serial++; ?></td>
                        <td><?= $total['id'] ?></td>
                        <td><img src="images/<?= $total['image'] ?>" width="80" height="80"></td>
                        <td><?= $total['name'] ?></td>
                        <td><?= $total['company'] ?></td>
                        <td><?= $total['platform']; ?></td>
                        <td><?= $total['genre'] ?></td>
                        <td><?= $total['price'] ?></td>
                        <td><?= $total['stock'] ?></td>
                        <td><?= $total['status'] ?></td>
                        <td>
                            <div class="d-flex gap-1 justify-content-center">
                            <a href="edit_ps5discs.php?id=<?= $total['id']; ?>">
                                <button class="btn btn-warning btn-sm">Edit</button>
                            </a>
                            <?php
                            if (isset($_GET['filter']) && $_GET['filter'] == 'dlt') {
                            ?>
                            <a href="undo_product_delete.php?id=<?= $total['id'];?>">
                                <button name="undoButton" onclick="return confirm ('Are you sure you want to restore <?= $total['name']; ?>?')" class="btn btn-secondary btn-sm">Restore</button>
                            </a>
                            <?php
                            } else {
                            ?>
                                <a href="delete_ps5discs.php?id=<?= $total['id']; ?>">
                                    <button name="deleteButton" onclick="return confirm ('Are you sure you want to delete <?= $total['name']; ?>?')" class="btn btn-danger btn-sm">Delete</button>
                                </a>
                            <?php
                            }
                            ?>
                            </div>
                        </td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>
</div>
