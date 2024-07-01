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
                        <th> Date of Birth</th>
                        <th> Gender</th>
                        <th> Email</th>
                        <th> Phone Number</th>
                        <th> Username</th>
                        <th> Password</th>
                        <th> Modification</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $qry = "SELECT * FROM tbl_admin";
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
                                <td><?php echo $row['birthday']?></td>;
                                <td><?php echo $row['gender'] ?></td>;
                                <td><?php echo $row['email']?></td>;
                                <td><?php echo $row['pnumber'] ?></td>;
                                <td><?php echo $row['username']?></td>;
                                <td><?php echo $row['password'] ?></td>;
                                <td>
                                    <a href="editFun.php?id=<?php echo $row['admin_id']?>" class="btn btn-primary me-2"><i class="ti ti-edit"></i></a>
                                    <a href="deleteFun.php?id=<?php echo $row['admin_id']?>" class="btn btn-danger"><i class="ti ti-trash"></i></a>
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