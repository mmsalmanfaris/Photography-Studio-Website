<?php

require_once 'headerDB.php';

$fmsg = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $birthday = $_POST["birthday"];
    $gender = "";

    if ($_POST["gender"] == 'male') {
        $gender = "Male";
    } elseif($_POST["gender"] == 'female') {
        $gender = "Female";
    }
    else{
        $gender = "Other";
    }

    $email = $_POST["email"];
    $pnumber = $_POST["pnumber"];

    $username = $_POST["username"];
    $password = $_POST["password"];


    $qry = "INSERT INTO tbl_admin(fname, lname, birthday, gender, email, pnumber, username, password) VALUES('$fname', '$lname', '$birthday', '$gender', '$email', '$pnumber', '$username', '$password')";

    $result = $con->query($qry);

    if (!$result) {
        die("Result Error");
    }

    $msg = "success";
}
?>


<!-- <div class="row"> -->
<div class="container py-5">
    <div class="row justify-content-center pt-5">
        <div class="col-12 col-lg-9 col-xl-7">
            <div class="card">
                <div class="card-body p-4 p-md-5">
                    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="firstName">First Name</label>
                                    <input type="text" name="fname" class="form-control form-control-lg" required />
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="lastName">Last Name</label>
                                    <input type="text" name="lname" class="form-control form-control-lg" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4 d-flex align-items-center">

                                <div class="form-outline datepicker w-100">
                                    <label for="birthdayDate" class="form-label">Birthday</label>
                                    <input type="date" name="birthday" class="form-control form-control-lg" required />
                                </div>

                            </div>
                            <div class="col-md-6 mb-4">

                                <h6 class="mb-3 mt-2">Gender: </h6>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender"  value="male" checked required/>
                                    <label class="form-check-label" for="femaleGender">Male</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender"  value="female"/>
                                    <label class="form-check-label" for="maleGender">Female</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender"  value="other"/>
                                    <label class="form-check-label" for="otherGender">Other</label>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4 pb-2">

                                <div class="form-outline">
                                    <label class="form-label" for="emailAddress">Email</label>
                                    <input type="email" name="email" class="form-control form-control-lg" required/>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="phoneNumber">Phone Number</label>
                                    <input type="tel" name="pnumber" class="form-control form-control-lg" required/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="phoneNumber">Username</label>
                                    <input type="text" name="username" class="form-control form-control-lg" required/>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="phoneNumber">Password</label>
                                    <input type="password" name="password" class="form-control form-control-lg" required/>
                                </div>
                            </div>
                        </div>

                        <div class="container"> 
                             <div class="row"> 
                                <div class="col-md-12">  </div> 
                                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Register" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
include './footerDB.php';
?>
</div>

