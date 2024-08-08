<?php
require_once 'headerDB.php';
?>

<?php
//Update Function

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $adminid = $_POST['admin_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $pnumber = $_POST['pnumber'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $qry  = "UPDATE tbl_admin SET fname ='" . $fname . "', lname = '" . $lname . "', birthday = '" . $birthday . "', gender = '" . $gender . "', email = '" . $email . "', pnumber = '" . $pnumber . "', username = '" . $username . "', password = '" . $password . "' WHERE admin_id =" . $adminid;

    $res = $conn->query($qry);

    if (!$res) {
        die("Admin Details Update Failed");
    }

    $msg = "adminUpdated";

    
    // header("Location: admindetailsDB.php");

} else {
    //Get admin detail from database
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $qry = "SELECT * FROM tbl_admin WHERE admin_id =" . $id;
        $res =  $conn->query($qry);
        $row = $res->fetch_assoc();
    }
    ?>
    <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
            <div class="card card-registration">
                <div class="card-body p-4 p-md-5">
                    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Edit Admin Details</h3>
                    <form action="" method="post">
                        <!--This input for functional purpose-->
                        <input type="hidden" name="admin_id" value="<?php echo $row['admin_id'] ?>">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="firstName">First Name</label>
                                    <input type="text" name="fname" class="form-control form-control-lg" required value="<?php echo $row['fname'] ?>" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="lastName">Last Name</label>
                                    <input type="text" name="lname" class="form-control form-control-lg" required value="<?php echo $row['lname'] ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4 d-flex align-items-center">

                                <div class="form-outline datepicker w-100">
                                    <label for="birthdayDate" class="form-label">Birthday</label>
                                    <input type="date" name="birthday" class="form-control form-control-lg" required value="<?php echo $row['birthday'] ?>" />
                                </div>

                            </div>
                            <div class="col-md-6 mb-4">

                                <h6 class="mb-3 mt-2">Gender: </h6>

                                <?php if ($row['gender'] == 'Male') { ?>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" value="male" checked />
                                        <label class="form-check-label" for="femaleGender">Male</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" value="female" />
                                        <label class="form-check-label" for="maleGender">Female</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" value="other" />
                                        <label class="form-check-label" for="otherGender">Other</label>
                                    </div>
                                <?php } elseif ($row['gender'] == 'Female') { ?>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" value="male" />
                                        <label class="form-check-label" for="femaleGender">Male</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" value="female" checked />
                                        <label class="form-check-label" for="maleGender">Female</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" value="other" />
                                        <label class="form-check-label" for="otherGender">Other</label>
                                    </div>
                                <?php } else { ?>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" value="male" />
                                        <label class="form-check-label" for="femaleGender">Male</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" value="female" />
                                        <label class="form-check-label" for="maleGender">Female</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" value="other" checked />
                                        <label class="form-check-label" for="otherGender">Other</label>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4 pb-2">

                                <div class="form-outline">
                                    <label class="form-label" for="emailAddress">Email</label>
                                    <input type="email" name="email" class="form-control form-control-lg" value="<?php echo $row['email'] ?>" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="phoneNumber">Phone Number</label>
                                    <input type="tel" name="pnumber" class="form-control form-control-lg" value="<?php echo $row['pnumber'] ?>" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="phoneNumber">Username</label>
                                    <input type="text" name="username" class="form-control form-control-lg" value="<?php echo $row['username'] ?>" />
                                </div>
                            </div>

                            <div class="col-md-6 mb-4 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="phoneNumber">Password</label>
                                    <input type="password" name="password" class="form-control form-control-lg" value="<?php echo $row['password'] ?>" />
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <input class="btn btn-success btn-lg btn-block mb-3" type="submit" value="Update" />

                                <a href="admindetailsDB.php" class="btn btn-secondary btn-block fs-5">Back to View</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>




    <?php
    require_once 'footerDB.php';
    ?>