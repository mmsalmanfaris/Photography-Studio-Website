<?php

require_once "dbh.inc.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_SPECIAL_CHARS);
  $pnumber = filter_input(INPUT_POST, 'pnumber', FILTER_SANITIZE_SPECIAL_CHARS);
  $category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_SPECIAL_CHARS);
  $package = filter_input(INPUT_POST, 'package', FILTER_SANITIZE_SPECIAL_CHARS);
  $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_SPECIAL_CHARS);
  $time = filter_input(INPUT_POST, 'time', FILTER_SANITIZE_SPECIAL_CHARS);
  $status = "Unread";

  $qry = $pdo->prepare("INSERT INTO tbl_booking(fname, pnumber, category, package, date, time, status) VALUES(:fname, :pnumber, :category, :package, :date, :time, :status )");
  $qry->bindParam(':fname', $fname);
  $qry->bindParam(':pnumber', $pnumber);
  $qry->bindParam(':category', $category);
  $qry->bindParam(':package', $package);
  $qry->bindParam(':date', $date);
  $qry->bindParam(':time', $time);
  $qry->bindParam(':status', $status);

  if ($qry->execute()) {
    header("Location: ../booking.php?booking=success");
  } else {
    header("Location: ../booking.php?booking=failed");
  }
} else {
  header("Location ../booking.php");
}


function submit_message()
{
  if (isset($_GET['booking'])) {
    $status = $_GET['booking'];

    if ($status === 'success') {
      echo "
            <script>
                Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Booking Successful!',
                showConfirmButton: false,
                timer: 2000
                });
            </script>
              ";
    } else if ($status === 'failed') {
      echo "
        <script>
                Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Booking Failed. Try again!',
                showConfirmButton: false,
                timer: 2000
                });
            </script>
      ";
    }
  }
}
