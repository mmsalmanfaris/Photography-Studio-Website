<?php
require_once '../includes/config_session.inc.php';


if(isset($_SESSION["user_id"])){ 
  require_once 'header.php';
  ?>
<div class="container">
  <div class="row">
    <div class="d-flex  mt-5 mx-4">
      <div class="col-3 my-5 mx-3 card text-center border rounded-3">
        <div class="card-body d-flex align-items-center justify-content-center">
          <h4 class="badge-black align-content-center pe-4">New Bookings</h4>

          <?php
          // $qry = "SELECT count(*) AS unread FROM tbl_booking WHERE status = 'Unread'";
          // $res = $conn->query($qry);

          // if ($res) {
          //   if ($res->num_rows > 0) {
          //     $row = $res->fetch_assoc();
          //     echo "<h3 class='bg-black text-white p-3 rounded-3'>". $row['unread'] . "</h3>";
          //   } else {
          //     echo "<h3 class='bg-black text-white p-3 rounded-3'>0</h3>";
          //   }
          // } else {
          //   echo "Query failed: " . $conn->error;
          // }
          ?>
        </div>
      </div>
      <div class="col-3 my-5 mx-3 card text-center border rounded-3">
        <div class="card-body d-flex align-items-center justify-content-center">
          <h4 class="badge-black align-content-center pe-4">Ongoing Shoot</h4>
          <?php
          // $qry = "SELECT count(*) AS processing FROM tbl_booking WHERE status = 'Processing'";
          // $res = $conn->query($qry);

          // if ($res) {
          //   if ($res->num_rows > 0) {
          //     $row = $res->fetch_assoc();
          //     echo "<h3 class='bg-black text-white p-3 rounded-3'>". $row['processing'] . "</h3>";
          //   } else {
          //     echo "<h3 class='bg-black text-white p-3 rounded-3'>0</h3>";
          //   }
          // } else {
          //   echo "Query failed: " . $conn->error;
          // }
          ?>
        </div>
      </div>
      <div class="col-3 my-5 mx-3 card text-center border rounded-3">
        <div class="card-body d-flex align-items-center justify-content-center">
          <h4 class="badge-black align-content-center pe-4">Completed</h4>
          <?php
          // $qry = "SELECT count(*) AS completed FROM tbl_booking WHERE status = 'Completed'";
          // $res = $conn->query($qry);

          // if ($res) {
          //   if ($res->num_rows > 0) {
          //     $row = $res->fetch_assoc();
          //     echo "<h3 class='bg-black text-white p-3 rounded-3'>". $row['completed'] . "</h3>";
          //   } else {
          //     echo "<h3 class='bg-black text-white p-3 rounded-3'>0</h3>";
          //   }
          // } else {
          //   echo "Query failed: " . $conn->error;
          // }
          ?>
        </div>
      </div>
      <div class="col-1 my-5 mx-3 card text-center ">
        <div class=" btn btn-outline-dark card-body d-flex align-items-center justify-content-center rounded-3">
          <i class="bi bi-arrow-right-circle ms-2"></i>  
        </div>
      </div>

    </div>
  </div>
</div>



<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $category = $_POST['category'];
  $image = $_FILES['image']['name'];
  $tmp_name = $_FILES['image']['tmp_name'];
  $path = "assets/img/Gallery/" . $image;
  move_uploaded_file($tmp_name, $path);

  $qry = "INSERT INTO tbl_gallery(category, image) VALUES('$category', '$image')";

  print_r($image);
  $result = $con->query($qry);

  if (!$result) {
    die("Query Error!");
  } else {
    $msg = "success";
  }
}
?>

<div class="container">
  <div class="row px-5">
    <div class="col-6 ">
      <h2 class="py-4">Add Latest Image</h2>
      <div class="card border">
        <div class="card-body">
          <div class=" col-12 p-3">
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="mb-4">
                <label for="" class="form-label pb-2">Select the Category</label>
                <select name="category" id="" class="form-select form-select-lg">
                  <option value="wedding">Wedding</option>
                  <option value="event">Event</option>
                </select>
              </div>
              <div class="col mb-3">
                <label for="image" class="form-label">Select the Latest Image</label>
                <input type="file" name="image" class="form-control form-control-lg" id="image" required>
              </div>

              <button class="btn btn-primary w-100 mt-3 p-2 fw-bold">Upload Image</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
require_once './footer.php';
  }
else {
  header("Location: ../login.php");
    die();
}


?>