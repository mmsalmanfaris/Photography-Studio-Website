<?php
    $fnctn_msg = "";

    include './adminHeader.php';

    $con = new mysqli('Localhost', 'root', '', 'malcolmlismore_db');

    if($con -> connect_error){
        die("Connection Failed");
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST["name"];
        $gender = "";

        if($_POST["gender"] == 'male'){
            $gender = "Male";
        }
        else{
            $gender = "Female";
        }

        $username = $_POST["username"];
        $password = $_POST["password"];
        

        if(!$password == $_POST["confirm_password"]){
            $fnctn_msg = "success";
        }

        $qry  = "INSERT INTO tbl_admin(name, gender, username, password) VALUES('$name', '$gender', '$username', '$password')";

        $result = $con->query($qry);

        if(!$result){
            die("Result Error");
        }

        $fnctn_msg = "success";
    }
?>

<div class="d-flex justify-content-center align-items-center vh-100 my-5">
    <form action="" method="post">
        <div class="card p-5">
            <h2>Become a Admin </h2>
            <hr>

            <div class="form-group py-2">
                <label for="" class="form-label">Full Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="d-flex py-2">
                <div class="form-check me-3">
                    <input class="form-check-input" type="radio" name="gender" id="" value="male" checked>
                    <label class="form-check-label">Male</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="" value="female">
                    <label class="form-check-label">Female</label>
                </div>
            </div>
            
            <div class="form-group py-2">
                <label for="" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="">
            </div>
            <div class="form-group py-2">
                <label for="" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="">
            </div>
            <div class="form-group py-2">
                <label for="" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="confirm_password">
            </div>
            <input type="submit" value="Register" class="btn btn-primary mt-3">
        </div>
    </form>
</div>

<?php
    include'./adminFooter.php';
?>