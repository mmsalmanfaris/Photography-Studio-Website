<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_SPECIAL_CHARS);
    $pnumber = filter_input(INPUT_POST, 'pnumber', FILTER_SANITIZE_SPECIAL_CHARS);
    $category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_SPECIAL_CHARS);
    $package = filter_input(INPUT_POST, 'package', FILTER_SANITIZE_SPECIAL_CHARS);
    $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_SPECIAL_CHARS);
    $time = filter_input(INPUT_POST, 'time', FILTER_SANITIZE_SPECIAL_CHARS);
    $status = "Unread";
  
    $qry = "INSERT INTO tbl_booking(fname, pnumber, category, package, date, time, status) VALUES('$fname', '$pnumber', '$category', '$package', '$date', '$time', '$status')";
  
  
    $res = $conn->query($qry);
  
    if (!$res) {
      die("Booking Failed");
    } else
      $fnctn_msg = "success";
  }