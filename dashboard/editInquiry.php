<?php
require_once 'header.php';
//Update Function

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $inquiryid = $_POST['inquiry_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pnumber = $_POST['pnumber'];
    $province = $_POST['province'];
    $message = $_POST['message'];
    $status = $_POST['status'];

    $qry = "UPDATE tbl_inquiry SET fname ='" . $fname . "', lname = '" . $lname . "', email = '" . $email . "', pnumber = '" . $pnumber . "', province = '" . $province . "', message = '" . $message . "', status = '" . $status . "' WHERE inquiry_id =" . $inquiryid;

    $res = $conn->query($qry);

    if (!$res) {
        die("Inquiry Details Update Failed");
    }

    $msg = "inquiryUpdated";
    // header("Location: admindetailsDB.php");
} else {
    //Get admin detail from database
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $qry = "SELECT * FROM tbl_inquiry WHERE inquiry_id =" . $id;
        $res = $conn->query($qry);
        $row = $res->fetch_assoc();
    }
    ?>
    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card card-registration">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Update Inquiry Status</h3>
                        <form class="container" action="" method="POST">
                            <div class="row g-4">
                                <div class="col-6 mb-3">
                                    <input type="hidden" name="inquiry_id" value="<?php echo $row['inquiry_id']?>">
                                    <label for="exampleFormControlInput1" class="form-label">First Name</label>
                                    <input type="text" class="form-control" placeholder="John" name="fname"
                                        value="<?php echo $row['fname'] ?>">
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Doe" name="lname"
                                        value="<?php echo $row['lname'] ?>">
                                </div>
                            </div>
                            <div class="row g-4">
                                <div class="col-6 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="name@gmail.com" name="email"
                                        value="<?php echo $row['email'] ?>">
                                </div>
                                <div class=" col-6 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                    <input type="tel" class="form-control" placeholder="94 76 175 4242" name="pnumber"
                                        value="<?php echo $row['pnumber'] ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Province</label>
                                    <input type="text" class="form-control" name="province" id="" value="<?php echo $row['province']?>">
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="message"
                                        value=""><?php echo $row['message'] ?></textarea>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Staus</label>
                                <select class="form-select" aria-label="Default select example" name="status">
                                    <?php if($row['status'] == 'Completed') { ?>
                                        <option value="Completed">Completed</option>
                                        <option value="Processing">Processing</option>
                                        <option value="Unread">Unread</option>
                                    <?php } 
                                    elseif($row['status'] == 'Processing') { ?>
                                        <option value="Processing">Processing</option>
                                        <option value="Completed">Completed</option>
                                        <option value="Unread">Unread</option>
                                    <?php } 
                                    else  {?>
                                        <option value="Unread">Unread</option>
                                        <option value="Processing">Processing</option>
                                        <option value="Completed">Completed</option>
                                    <?php } ?>
                                </select>
                            </div>
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php }
    require_once 'footer.php';
?>