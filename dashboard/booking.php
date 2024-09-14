<?php
require_once '../includes/config_session.inc.php';

if(isset($_SESSION["user_id"])){ 
    require_once 'header.php';
    ?>

<div class="continer">
    <div class="row py-5 px-3">
        <div class="col-12 mt-5">
            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th>Booking Id</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Category</th>
                        <th>Packages</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th>Modification</th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                    $qry = "SELECT * FROM tbl_booking";

                    $res = $pdo->prepare($qry);
                    if (!$res) {
                        die("Booking Data not Found!");
                    } else {
                        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                            <tr>
                                <td><?php echo $row['booking_id'] ?></td>
                                <td><?php echo $row['fname'] ?></td>
                                <td><?php echo $row['pnumber'] ?></td>
                                <td><?php echo $row['category'] ?></td>
                                <td><?php echo $row['package'] ?></td>
                                <td><?php echo $row['date'] ?></td>
                                <td><?php echo $row['time'] ?></td>
                                <td><?php echo $row['status'] ?></td>
                                <td> <a href="" class="btn btn-primary"> <i class="ti ti-edit"></i></a> </td>
                            </tr>
                        <?php }
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Footer section -->
<?php  

require_once 'footer.php';
}
else {
  header("Location: ../login.php");
    die();
}
?>





