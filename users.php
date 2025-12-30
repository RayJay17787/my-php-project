<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'gaming_store');

if (!isset($_SESSION['admin'])) {
    header("Location: signin.php");
    exit();
}

if (isset($_GET['filter'])) {
    $filter = $_GET['filter'];

    if ($filter == 'delUser') {
        $query = "SELECT * FROM customers WHERE status = 'inactive'";
    } else {
        $query = "SELECT * FROM customers WHERE status = 'active'";
    }
} else {
    $query = "SELECT * FROM customers WHERE status = 'active'";
}

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

include 'adminheader.php';
?>

<div class="container-fluid px-4 pt-2">
    <h1 class="text-center mb-4"><b>Users</b></h1>

    <div class="d-flex justify-content-between align-items-center mb-0">
        <h6 class="mb-0">Total Count: <?= $row ?> Users</h6>
        <div class="d-flex gap-2">
            <?php
            if (isset($_GET['filter']) && $_GET['filter'] == 'delUser') {
                ?>
                <a href="?users.php">
                    <button class="btn btn-success rounded-pill mb-4"><i style="color: white;"
                            class="fa-solid fa-trash"></i> Hide Deleted Users</button>
                </a>
                <?php
            } else {
                ?>
                <a href="?filter=delUser">
                    <button class="btn btn-success rounded-pill mb-4"><i style="color: white;"
                            class="fa-solid fa-trash"></i> Show Deleted Users</button>
                </a>
                <?php
            }
            ?>
            <a href="create_users.php">
                <button class="btn btn-success rounded-pill mb-4">+ Add a User</button>
            </a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table text-center table-hover">
            <thead class="table-dark">
                <th>ID</th>
                <th>Name</th>
                <th>Date Of Birth</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone</th>
                <th>Actions</th>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < $row; $i++) {
                    $total = mysqli_fetch_assoc($result);
                    ?>
                    <tr>
                        <td><?= $i + 1; ?></td>
                        <td><?= $total['name']; ?></td>
                        <td><?= $total['dob']; ?></td>
                        <td><?= $total['gender']; ?></td>
                        <td><?= $total['email']; ?></td>
                        <td><?= $total['password']; ?></td>
                        <td><?= $total['phone']; ?></td>
                        <td>
                            <?php
                            if (isset($_GET['filter']) && $_GET['filter'] == 'delUser') {
                                ?>
                                <a href="undo_user_delete.php?id=<?= $total['id']; ?>">
                                    <button onclick="return confirm('Are you sure you want to restore <?= $total['name']; ?>?')"
                                        class="btn btn-secondary btn-sm">Restore</button>
                                </a>
                                <a href="delete_user_perm.php?id=<?= $total['id']; ?>">
                                    <button
                                        onclick="return confirm('Are you sure you want to delete <?= $total['name']; ?> permanently?')"
                                        class="btn btn-danger btn-sm">Delete Permanently</button>
                                </a>
                                <?php
                            } else {
                                ?>
                                <a href="edit_users.php?id=<?= $total['id']; ?>">
                                    <button class="btn btn-warning btn-sm">Edit</button>
                                </a>
                                <a href="delete_users.php?id=<?= $total['id']; ?>">
                                    <button onclick="return confirm('Are you sure you want to remove <?= $total['name']; ?>?')"
                                        class="btn btn-danger btn-sm">Remove</button>
                                </a>
                                <?php
                            }
                            ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>

            </tbody>
        </table>
    </div>
</div>

<?php
// include 'footer.php';
?>