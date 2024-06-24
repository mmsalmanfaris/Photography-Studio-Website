<?php
include './adminHeader.php';
?>

<div class="d-flex justify-content-center align-items-center vh-100 my-5">
    <form action="" method="post">
        <div class="card p-5">
            <h2>Become a Admin </h2>
            <hr>

            <div class="form-group py-2">
                <label for="" class="form-label">Full Name</label>
                <input type="text" class="form-control">
            </div>
            <div class="d-flex py-2">
                <div class="form-check me-3">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender" value="male">
                    <label class="form-check-label" for="maleGender">Male</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="female">
                    <label class="form-check-label" for="femaleGender">Female</label>
                </div>
            </div>
            
            <div class="form-group py-2">
                <label for="" class="form-label">Username</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group py-2">
                <label for="" class="form-label">Password</label>
                <input type="password" class="form-control">
            </div>
            <div class="form-group py-2">
                <label for="" class="form-label">Confirm Password</label>
                <input type="text" class="form-control">
            </div>
            <input type="submit" value="Register" class="btn btn-primary mt-3">

        </div>

    </form>
</div>