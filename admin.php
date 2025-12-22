<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'gaming_store');

$query = "SELECT * FROM users";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);
include 'adminheader.php';
?>

<div class="container my-5 py-5">
    <h1 class="text-center mb-4"><b>Admins Table</b></h1>

    <div class="text-end me-2">
        <a href="create_admin.php">
            <button class="btn btn-success rounded-pill mb-4">+Add Admin</button>
        </a>
    </div>

    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <th>S.no</th>
            <th>ID</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < $row; $i++) {
                $total = mysqli_fetch_assoc($result);
            ?>
                <tr>
                    <td><?= $i + 1?></td>
                    <td><?= $total['id'];?></td>
                    <td><?= $total['username'];?></td>
                    <td><?= $total['password'];?></td>
                    <td><?= $total['email'];?></td>
                    <td>
                        <a href="edit_admin.php?id=<?= $total['id'];?>">
                            <button class="btn btn-warning btn-sm">Edit</button>
                        </a>
                        <a href="delete_admin.php?id=<?= $total['id'];?>">
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<?php
include 'footer.php';
?>