<?php
    session_start();
    $conn = mysqli_connect('localhost', 'root', '', 'gaming_store');

    $query = "SELECT * FROM customers";

    $result = mysqli_query($conn, $query);

    $row = mysqli_num_rows($result);

    include 'adminheader.php';
?>

<div class="container my-5 py-5">
    <h1 class="text-center mb-4">User Table</h1>

    <div class="text-end me-2">
        <a href="create_users.php">
            <button class="btn btn-success rounded-pill mb-4">+ Add User</button>
        </a>
    </div>

    <table class="table table-bordered text-center table-hover">
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
                for($i = 0; $i < $row; $i++){
                    $total = mysqli_fetch_assoc($result);
                ?>
            <tr>
                <td><?=  $i + 1;?></td>
                <td><?=  $total['name'];?></td>
                <td><?=  $total['dob'];?></td>
                <td><?=  $total['gender'];?></td>
                <td><?=  $total['email'];?></td>
                <td><?=  $total['password'];?></td>
                <td><?=  $total['phone'];?></td>
                <td>
                    <a href="edit_users.php?id=<?= $total['id'];?>">
                        <button class="btn btn-warning btn-sm">Edit</button>
                    </a>
                    <a href="delete_users.php?id=<?= $total['id'];?>">
                        <button onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm">Delete</button>
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