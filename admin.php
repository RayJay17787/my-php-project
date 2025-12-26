<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'gaming_store');

if (isset($_GET['filter'])) {
    $filter = $_GET['filter'];

    if ($filter == 'delAdmin') {
        $query = "SELECT * FROM users WHERE status = 'inactive'";
    } 
    
    else {
        $query = "SELECT * FROM users WHERE status = 'active'";
    }
} 

else {
    $query = "SELECT * FROM users WHERE status = 'active'";
}

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

include 'adminheader.php';
?>

<div class="container-fluid px-4 pt-2">
    <h1 class="text-center mb-4"><b>Admins</b></h1>

    <div class="d-flex justify-content-between align-items-center mb-0">
        <h6 class="mb-0">Total Count: <?= $row ?> Admins</h6>

        <div class="d-flex gap-2">
            <?php
            if (isset($_GET['filter']) && $_GET['filter'] == 'delAdmin') {
            ?>
                <a href="?admin.php">
                    <button class="btn btn-success rounded-pill mb-4"><i style="color: white;" class="fa-solid fa-trash"></i> Hide Deleted Admins</button>
                </a>
            <?php
            }else{
                ?>
                <a href="?filter=delAdmin">
                <button class="btn btn-success rounded-pill mb-4"><i style="color: white;" class="fa-solid fa-trash"></i> Show Deleted Admins</button>
            </a>
                <?php
            }
            ?>
            <a href="create_admin.php">
                <button class="btn btn-success rounded-pill mb-4">+ Add Admin</button>
            </a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-hover text-center">
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
                        <td><?= $i + 1 ?></td>
                        <td><?= $total['id']; ?></td>
                        <td><?= $total['username']; ?></td>
                        <td><?= $total['password']; ?></td>
                        <td><?= $total['email']; ?></td>
                        <td>
                            <!-- <a href="edit_admin.php?id=<?= $total['id']; ?>">
                                <button class="btn btn-warning btn-sm">Edit</button>
                            </a> -->
                            <?php
                                if(isset($_GET['filter']) && $_GET['filter'] == 'delAdmin'){
                                    ?>
                                        <a href="undo_admin_delete.php?id=<?= $total['id']; ?>">
                                            <button onclick="return confirm('Are you sure you want to restore <?= $total['username'];?>')" class="btn btn-secondary btn-sm">Restore</button>     
                                            <a href="delete_admin_perm.php?id=<?= $total['id']; ?>">
                                        <button onclick="return confirm('Are you sure you want to delete <?= $total['username'];?> permanently')" class="btn btn-danger btn-sm">Delete Permanently</button>
                                    </a>
                                    <?php
                                } else{
                                    ?>
                                    <a href="edit_admin.php?id=<?= $total['id']; ?>">
                                <button class="btn btn-warning btn-sm">Edit</button>
                            </a>
                                        <a href="delete_admin.php?id=<?= $total['id']; ?>">
                                <button onclick="return confirm('Are you sure you want to remove <?= $total['username'];?>')" class="btn btn-danger btn-sm">Remove</button>
                                    <?php
                                }
                            ?>
                            </a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>