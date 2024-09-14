<?php
require_once '../includes/config_session.inc.php';

if(isset($_SESSION["user_id"])){ 
    require_once 'header.php';

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
                        <th>Photo Count</th>
                        <th>Editing</th>
                        <th>Assistant</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Modification</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $qry = "SELECT * FROM tbl_package";
                    $res = $conn->query($qry);
                    if (!$res) {
                        die("Package Data not Found!");
                    } else {
                        while ($row = $res->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $row['name'] ?></td>;
                                <td><?php echo $row['price'] ?></td>;
                                <td><?php echo $row['duration'] ?></td>;
                                <td><?php echo $row['photo_count'] ?></td>;
                                <td><?php echo $row['editing'] ?></td>;
                                <td><?php echo $row['assistant'] ?></td>;
                                <td><?php echo $row['category']?></td>
                                <td><img src="./assets/img/PackagePage/<?php echo $row['image'] ?>"width="100" height="100"></td>;
                                <td>
                                    <a href="ackage.php?id=<?php echo $row['package_id'] ?>" class="btn btn-primary me-2"><i
                                            class="ti ti-edit"></i></a>
                                    <a href="packageDB.php?id=<?php echo $row['package_id'] ?>" class="btn btn-danger"><i class="ti ti-trash"></i>

                                    </a>
                                </td>
                            </tr>
                            <?php
                        }                        
                    }
                    ?>
                </tbody>
            </table>
            <?php 
                if(isset($_GET['id'])){
                    $id = $_GET['id'];

                    $qry = "DELETE FROM tbl_package WHERE package_id =".$id;

                    $res = $conn -> query($qry);

                    if (!$res){
                        die("Not Deleted");
                    }
                    else{
                        $msg = "packagedeleted";
                    }

                    require_once'footerDB.php';
                }
            ?>
        </div>
    </div>
</div>



<?php  
require_once 'footer.php';

}
else {
  header("Location: ../login.php");
    die();
}
?>