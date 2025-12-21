<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'gaming_store');
$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);
include 'adminheader.php';
?>

<div class="container my-5 py-5">
    <h1 class="text-center mb-4"><b>PlayStation 5 Disc Listing</b></h1>

    <table class="table table-bordered table-gover text-center">
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
            for ($i = 0; $i < $row; $i++) {
                $total = mysqli_fetch_assoc($result);
                if($total['platform'] == 'Playstation 5' || $total['platform'] == 'ps5'){
                    ?>
                <tr>
                    <td><?= $i + 1; ?></td>
                    <td><?= $total['id'] ?></td>
                    <td><img src="images/<?= $total['image'] ?>" width="80" height="80"></td>
                    <td><?= $total['name'] ?></td>
                    <td><?= $total['company'] ?></td>
                    <td><?= $total['platform'] ?></td>
                    <td><?= $total['genre'] ?></td>
                    <td><?= $total['price'] ?></td>
                    <td><?= $total['stock'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $total['id']; ?>">
                            <button class="btn btn-warning btn-sm">Edit</button>
                        </a>
                        <a href="delete.php?id=<?= $total['id']; ?>">
                            <button class="btn btn-danger btn-sm">Delete</button>
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