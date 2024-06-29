<?php
$fnctn_msg = "";

$con = new mysqli('Localhost', 'root', '', 'malcolmlismore_db');

if ($con->connect_error) {
    die("Connection Failed");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $gender = "";

    if ($_POST["gender"] == 'male') {
        $gender = "Male";
    } else {
        $gender = "Female";
    }

    $username = $_POST["username"];
    $password = $_POST["password"];


    if (!$password == $_POST["confirm_password"]) {
        $fnctn_msg = "success";
    }

    $qry = "INSERT INTO tbl_admin(name, gender, username, password) VALUES('$name', '$gender', '$username', '$password')";

    $result = $con->query($qry);

    if (!$result) {
        die("Result Error");
    }

    $fnctn_msg = "success";
}
?>


<?php
require_once 'headerDB.php';
?>

<!-- <div class="row"> -->
<div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
            <div class="card card-registration">
                <div class="card-body p-4 p-md-5">
                    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                    <form>

                        <div class="row">
                            <div class="col-md-6 mb-4">

                                <div class="form-outline">
                                    <label class="form-label" for="firstName">First Name</label>
                                    <input type="text" id="firstName" class="form-control form-control-lg" />
                                </div>

                            </div>
                            <div class="col-md-6 mb-4">

                                <div class="form-outline">
                                    <label class="form-label" for="lastName">Last Name</label>
                                    <input type="text" id="lastName" class="form-control form-control-lg" />
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4 d-flex align-items-center">

                                <div class="form-outline datepicker w-100">
                                    <label for="birthdayDate" class="form-label">Birthday</label>
                                    <input type="date" class="form-control form-control-lg" id="birthdayDate" />
                                </div>

                            </div>
                            <div class="col-md-6 mb-4">

                                <h6 class="mb-2 pb-1">Gender: </h6>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender" value="option1" checked />
                                    <label class="form-check-label" for="femaleGender">Female</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender" value="option2" />
                                    <label class="form-check-label" for="maleGender">Male</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender" value="option3" />
                                    <label class="form-check-label" for="otherGender">Other</label>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4 pb-2">

                                <div class="form-outline">
                                    <label class="form-label" for="emailAddress">Email</label>
                                    <input type="email" id="emailAddress" class="form-control form-control-lg" />
                                </div>

                            </div>
                            <div class="col-md-6 mb-4 pb-2">

                                <div class="form-outline">
                                    <label class="form-label" for="phoneNumber">Phone Number</label>
                                    <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4 pb-2">

                                <div class="form-outline">
                                    <label class="form-label" for="phoneNumber">Password</label>
                                    <input type="password" id="phoneNumber" class="form-control form-control-lg" />
                                </div>
                            </div>

                            <div class="col-md-6 mb-4 pb-2">

                                <div class="form-outline">
                                    <label class="form-label" for="phoneNumber">Confirm Password</label>
                                    <input type="password" id="phoneNumber" class="form-control form-control-lg" />
                                </div>
                            </div>
                        </div>


                        <div class="mt-2">
                            <input  class="btn btn-primary btn-lg btn-block" type="submit" value="Register" />
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
include './footerDB.php';
?>
</div>
</body>

</html>