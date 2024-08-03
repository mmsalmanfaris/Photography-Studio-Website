<?php
// header section of the contact page
include_once './header.php';

// Inquiry form and contact information section of the contact page
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $fname = $_POST["fname"];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $pnumber = $_POST['pnumber'];
  $province = $_POST['province'];
  $message = $_POST['message'];
  $status = "unread";

  $qry = "INSERT INTO tbl_inquiry(fname, lname, email, pnumber, province, message, status) VALUES('$fname', '$lname', '$email', '$pnumber', '$province', '$message','$status')";

  $res = $con->query($qry);

  if (!$res) {
    die("Inquiry Submission Unsuccessfull");
  } else {
    $fnctn_msg = "success";
  }
}

?>

<section>
  <div class="container">
    <div style="height: 100px;"> </div>
    <div class="row justify-content-around">
      <div class="card text-white text-center bg-primary me-3" style="max-width: 18rem;">
        <div class="card-body">
          <img class="mt-2" src="./assets/icon/phonecall.png" alt="">
          <h5 class="card-title mt-4">+94 76 175 4242</h5>
        </div>
      </div>
      <div class="card text-white text-center bg-primary mx-3" style="max-width: 18rem;">
        <div class="card-body">
          <img class="mt-2" src="./assets/icon/email.png" alt="">
          <h5 class="card-title mt-4">info@malcom.com</h5>
        </div>
      </div>
      <div class="card text-white text-center bg-primary mx-3" style="max-width: 18rem;">
        <div class="card-body">
          <img class="mt-2" src="./assets/icon/location.png" alt="">
          <h5 class="card-title mt-4">Northwest Scotland</h5>
        </div>
      </div>
      <div class="card text-white text-center bg-primary ms-3" style="max-width: 18rem;">
        <div class="card-body">
          <img class="mt-2" src="./assets/icon/facebook.png" alt="">
          <h5 class="card-title mt-4">Facebook Page</h5>
        </div>
      </div>
    </div>

  </div>
</section>


<section>
  <div class="container py-5 my-5">
    <div class="row g-5">
      <!-- Contact Information Block -->
      <div class="col-xl-6">
        <div class=" mt-2 aos-item" data-aos="fade-up" data-aos-delay="800">
          <div class="w-100 h-100 aos-item__inner">
            <iframe class="hvr-shadow" width="100%" height="600px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=300&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+()&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure acres/hectares on map</a></iframe>
          </div>
        </div>
      </div>

      <!-- Contact Form Block -->
      <div class="col-xl-6">
        <h2 class="pb-4">Leave a message</h2>
        <form action="" method="POST">
          <div class="row g-4">
            <div class="col-6 mb-3">
              <label for="exampleFormControlInput1" class="form-label">First Name</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="John" name="fname">
            </div>
            <div class="col-6 mb-3">
              <label for="exampleFormControlInput1" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Doe" name="lname">
            </div>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@gmail.com" name="email">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Phone</label>
            <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="94 76 175 4242" name="pnumber">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Province</label>
            <select class="form-select" aria-label="Default select example" name="province" value="province">
              <option value="Central">Central</option>
              <option value="Eastern">Eastern</option>
              <option value="North Central">North Central</option>
              <option value="Souther USA">Souther USA</option>
              <option value="Nothern">Nothern</option>
              <option value="North Western">North Western</option>
              <option value="Sabragamuwa">Sabragamuwa</option>
              <option value="Southern">Southern</option>
              <option value="Uva">Uva</option>
              <option value="Wester">Wester</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
          </div>
          <input type="submit" value="Submit" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>
</section>


<?php
include './footer.php';
?>