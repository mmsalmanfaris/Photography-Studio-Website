<?php require_once"header.php";

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
?>


<!--Book your shooting-->
<div class="container">
  <div class="row area-booking">
    <div class="col-12 d-flex flex-column">
      <div class="col-12 text-center">
        <h2 class="display-5 fw-bold text-primary">Book Your Photoshoot</h2>
        <p class="lead">Our team will contact you throught phone call within an hour.</p>
      </div>
      <div class="p-xl-5 p-4 rounded-4 w-100 shadow-sm border">
        <form action="index.php" method="POST">
          <div class="row">
            <div class="col-xxl-4 col-12 mb-3">
              <label for="" class="form-label">Full Name</label>
              <input type="text" class="form-control form-control-lg" placeholder="" name="fname" required>
            </div>
            <div class="col-xxl-4 col-12 mb-3">
              <label for="" class="form-label">Phone Number</label>
              <input type="text" class="form-control  form-control-lg" placeholder="" name="pnumber" required>
            </div>
            <div class="col-xxl-4 col-12 mb-3">
              <label for="" class="form-label">Category</label>
              <select class="form-select form-select-lg" aria-label="Default select example" name="category">
                <option value="wedding" name="wedding">Wedding</option>
                <option value="event" name="event">Event</option>
                <option value="other" name="other">Other</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-xxl-4 col-12 mb-3">
              <label for="" class="form-label">Package</label>
              <select class="form-select form-select-lg" aria-label="Default select example" name="package" value="package">
                <option value="pre" name="pre">Pre Wedding Shoot</option>
                <option value="bridal" name="bridal">Bridal Photoshoot</option>
                <option value="engagement" name="engagement">Engagment Photoshoot</option>
              </select>
            </div>
            <div class="col-xxl-4 col-sm-12 mb-3">
              <label for="exampleFormControlInput1" class="form-label">Select Date</label>
              <input type="date" class="form-control form-control-lg" name="date">
            </div>
            <div class="col-xxl-4 col-12 mb-3">
              <label for="exampleFormControlInput1" class="form-label">Starting Time</label>
              <input type="time" class="form-control form-control-lg" name="time">
            </div>
          </div>

          <div class="row">
            
          </div>
          <input type="submit" value="Book Now!" class="btn btn-primary btn-lg w-100 mt-4">
        </form>
      </div>
    </div>
  </div>
</div>


<?php require_once"footer.php"?>