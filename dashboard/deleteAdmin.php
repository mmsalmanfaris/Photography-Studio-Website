<?php 
require_once'DBcon.php';

    $id = $_GET['id'];

    $qry = "DELETE FROM tbl_admin WHERE admin_id =".$id;

    $res = $conn -> query($qry);

    if (!$res){
        die("Not Deleted");
    }
    else{
        $msg = "Deleted";
    }

    require_once'footerDB.php';
?>