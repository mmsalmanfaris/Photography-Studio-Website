<?php 
    require_once 'headerDB.php';
?>


<div class="container">
    <div class="row p-5">
        <div class="col-12 mt-5">
            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Modification</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $qry = "SELECT * FROM tbl_gallery";
                    $res = $con->query($qry);
                    if (!$res) {
                        die("Gallery Data not Found!");
                    } else {
                        while ($row = $res->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $row['category'] ?></td>
                                <td> <img src="./assets/img/Gallery/<?php echo $row['image'] ?>" width="200" height="200"></td>
                                <td>
                                    <a href="" class="btn btn-primary"><i class="ti ti-edit"></i></a>
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