<?php
session_start();
include 'adminheader.php';
?>

<div class="container my-5 py-5">
    <h1 class="text-center mb-4">listings</h1>

    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <th>ID</th>
            <th>title</th>
            <th>console</th>
            <th>price</th>
            <th>edit/delete</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>dead or alive 6</td>
                <td> ps4</td>
                <td>$78.00</td>
                <td class="btn btn-primary text-primary"> edit</td>
                <td class="btn  btn-danger text-danger"> delete</td>
            </tr>
        </tbody>
    </table>
</div>

<?php
include 'footer.php';
?>