<?php
session_start();
include 'adminheader.php';
?>

<div class="container my-5 py-5">
    <h1 class="text-center mb-4">Orders</h1>

    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <th>ID</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>location</th>
            <th>Order Items</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Ahsan</td>
                <td>090078601</td>
                <td>ahsan.15911_n@email.com</td>
                <td>north khi 11c/3 r-386</td>
            </tr>
        </tbody>
    </table>
</div>

<?php
include 'footer.php';
?>