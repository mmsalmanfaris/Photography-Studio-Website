<?php
// header section of the contact page
include_once './header.php';

// Inquiry form and contact information section of the contact page
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_SPECIAL_CHARS);
  $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
  $pnumber = filter_input(INPUT_POST, 'pnumber', FILTER_SANITIZE_SPECIAL_CHARS);
  $province = filter_input(INPUT_POST, 'province', FILTER_SANITIZE_SPECIAL_CHARS);
  $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);
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
      <div class="card text-white text-center bg-primary me-md-3 mb-3 " style="max-width: 18rem;">
        <div class="card-body">
          <img class="mt-2" src="./icon/phonecall.png" alt="">
          <h5 class="card-title mt-4">+94 76 175 4242</h5>
        </div>
      </div>
      <div class="card text-white text-center bg-primary mx-md-3 mb-3" style="max-width: 18rem;">
        <div class="card-body">
          <img class="mt-2" src="./icon/email.png" alt="">
          <h5 class="card-title mt-4"> <a href="mainto:info@esaistudio.com">info@esaistudio.com</a></h5>
        </div>
      </div>
      <div class="card text-white text-center bg-primary mx-md-3 mb-3" style="max-width: 18rem;">
        <div class="card-body">
          <img class="mt-2" src="./icon/location.png" alt="">
          <h5 class="card-title mt-4">Batticaloa, Sri Lanka</h5>
        </div>
      </div>
      <div class="card text-white text-center bg-primary ms-md-3 mb-3" style="max-width: 18rem;">
        <div class="card-body">
          <img class="mt-2" src="./icon/facebook.png" alt="">
          <h5 class="card-title mt-4"><a href="www.facebook.com/****">Facebook Page</a></h5>
        </div>
      </div>
    </div>

  </div>
</section>

<div class="container">
  <div class="figure my-5 py-5 d-none d-sm-block ">
    <img src="./img/contact/contact.webp" alt="" class="figure-img img-fluid rounded-5"
      style="height: 400px; width: 1500px; object-fit:cover;">
  </div>
</div>

<section>
  <div class="container py-3  mb-5">
    <div class="row">
      <!-- Contact Form Block -->
      <h2 class="pb-4 text-center text-md-start mt-5">Leave a message</h2>
      <div class="col-md-6 col-11 p-xl-5 m-md-0 m-3 p-4 rounded-4 shadow-sm border">
        <form action="" method="POST">
          <div class="row g-4">
            <div class="col-md-6 col-12 mb-md-3">
              <label for="exampleFormControlInput1" class="form-label">First Name</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="John" name="fname">
            </div>
            <div class="col-md-6 col-12 mb-3">
              <label for="exampleFormControlInput1" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Doe" name="lname">
            </div>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@gmail.com"
              name="email">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Phone</label>
            <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="94 76 175 4242"
              name="pnumber">
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
          <input type="submit" value="Submit" class="btn btn-primary w-100">
        </form>
      </div>

      <div class="container col-md-6 col-12">
        <div class=" mt-2">
          <div class="container col-12">
            <div class=" mt-2 aos-item" data-aos="fade-up" data-aos-delay="800">
              <div class="w-100 h-100 aos-item__inner">
                <iframe class="hvr-shadow" width="100%" height="600px" frameborder="0" scrolling="no" marginheight="0"
                  marginwidth="0"
                  src="https://maps.google.com/maps?width=100%25&amp;height=300&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+()&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                    href="https://www.maps.ie/distance-area-calculator.html">measure acres/hectares on map</a></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</section>


<?php
include './footer.php';
?>