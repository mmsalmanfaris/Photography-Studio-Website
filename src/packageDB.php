<?php
require_once 'headerDB.php';
?>






<div class="container">
    <div class="row py-5">
        <div class="col-12 py-5">
            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th>Package Name</th>
                        <th>Price</th>
                        <th>Shoot Duration</th>
                        <th>Details</th>
                        <th>Image</th>
                        <th>Modification</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $qry = "SELECT * FROM tbl_package";
                    $res = $con->query($qry);
                    if (!$res) {
                        die("Package Data not Found!");
                    } else {
                        while ($row = $res->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $row['package_name'] ?></td>;
                                <td><?php echo $row['price'] ?></td>;
                                <td><?php echo $row['shoot_duration'] ?></td>;
                                <td><?php echo $row['details'] ?></td>;
                                <td><img src="<?php echo $row['image'] ?>"width="100" height="100"></td>;
                                <td>
                                    <a href="editPackage.php?id=<?php echo $row['package_id'] ?>" class="btn btn-primary me-2"><i
                                            class="ti ti-edit"></i></a>
                                    <a href="deletePackage.php?id=<?php echo $row['package_id'] ?>" class="btn btn-danger"><i
                                            class="ti ti-trash"></i></a>
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
require_once 'footerDB.php';
?>