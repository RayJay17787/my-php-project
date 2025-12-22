<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'gaming_store');
$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);
include 'adminheader.php';
?>

<div class="container my-5 py-5">
    <h1 class="text-center mb-4"><b>PlayStation 4 Disc Listing</b></h1>

    <div class="text-end me-2">
        <a href="create_ps4discs.php">
            <button class="btn btn-success rounded-pill mb-4">+ Add PS4 Disc</button>
        </a>
    </div>

    <table class="table table-bordered table-hover text-center">
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
            <th>Actions</th>
        </thead>
        <tbody>
            <?php
                $serial = 1;
            for ($i = 0; $i < $row; $i++) {
                $total = mysqli_fetch_assoc($result);
                if($total['platform'] == 'Playstation 4' || $total['platform'] == 'playstation 4'){
                    ?>
                <tr>
                    <td><?= $serial++; ?></td>
                    <td><?= $total['id'] ?></td>
                    <td><img src="images/<?= $total['image'] ?>" width="80" height="80"></td>
                    <td><?= $total['name'] ?></td>
                    <td><?= $total['company'] ?></td>
                    <td>Playstation 4</td>
                    <td><?= $total['genre'] ?></td>
                    <td><?= $total['price'] ?></td>
                    <td><?= $total['stock'] ?></td>
                    <td>
                        <a href="edit_ps4discs.php?id=<?= $total['id']; ?>">
                            <button class="btn btn-warning btn-sm">Edit</button>
                        </a>
                        <a href="delete_ps4discs.php?id=<?= $total['id']; ?>">
                            <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
                        </a>
                    </td>
                </tr>
            <?php
                }
            }
            ?>

        </tbody>
    </table>
</div>

<?php
include 'footer.php';
?>