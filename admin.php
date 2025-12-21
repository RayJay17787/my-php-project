<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'gaming_store');

$query = "SELECT * FROM users";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);
include 'adminheader.php';
?>

<div class="container my-5 py-5">
    <h1 class="text-center mb-4">Admins Table</h1>

    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <th>ID</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < $row; $i++) {
                $total = mysqli_fetch_assoc($result);
            ?>
                <tr>
                    <td><?= $i + 1?></td>
                    <td><?= $total['username'];?></td>
                    <td><?= $total['password'];?></td>
                    <td><?= $total['email'];?></td>
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