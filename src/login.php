<?php
    include'./adminHeader.php';
?>


<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card p-5">
        <h2>Admin Login</h2>
        <hr>
        <div class="form-group py-2">
            <label for="" class="form-lable">Username</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group py-2">
            <label for="" class="form-lable">Password</label>
            <input type="text" class="form-control">
        </div>
        <input type="submit" value="Register" class="btn btn-primary mt-3">
    </div>
</div>

<?php
    include'./adminFooter.php';
?>