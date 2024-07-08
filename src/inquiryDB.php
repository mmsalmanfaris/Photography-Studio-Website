<?php 
    //Header
    require_once'headerDB.php';
    require_once'menuDB.php';
?>

<!--Admin Details Section - table-->

<div class="container">
    <div class="row py-5">
        <div class="col-lg-12 h-100 justify-content-center align-items-center py-5">
            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th> First Name</th>
                        <th> Last Name</th>
                        <th> Email</th>
                        <th> Phone Number</th>
                        <th> Province</th>
                        <th> Message</th>
                        <th> Status</th>
                        <th> Modification</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $qry = "SELECT * FROM tbl_inquiry";
                    $res = $con -> query($qry);

                    if(!$res){
                        die("Data not Found!");
                    }
                    else{
                        while($row = $res -> fetch_assoc())
                        {
                            ?>
                            <tr>
                                <td><?php echo $row['fname']?></td>;
                                <td><?php echo $row['lname'] ?></td>;
                                <td><?php echo $row['email']?></td>;
                                <td><?php echo $row['pnumber'] ?></td>;
                                <td><?php echo $row['province']?></td>;
                                <td><?php echo $row['message'] ?></td>;
                                <td>
                                    <span class="badge <?php 
                                        switch($row['status']) {
                                            case 'Completed':
                                                echo 'bg-success'; 
                                                break;
                                            case 'Processing': 
                                                echo 'bg-secondary';
                                                break;
                                            default:
                                                echo 'bg-danger';
                                        }
                                    ?>">
                                        <?php echo $row['status'] ?>
                                    </span>
                                </td>
                                <td>
                                    <a href="editInquiry.php?id=<?php echo $row['inquiry_id'] ?>" class="btn btn-primary me-2"><i class="ti ti-edit"></i></a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<?php 
    require_once'footerDB.php';
?>