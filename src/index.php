<!-- Booking code -->
<?php
include './header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $fname = $_POST["fname"];
  $pnumber = $_POST['pnumber'];
  $category = $_POST['category'];
  $package = $_POST['package'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $status = "Unread";

  $qry = "INSERT INTO tbl_booking(fname, pnumber, category, package, date, time, status) VALUES('$fname', '$pnumber', '$category', '$package', '$date', '$time', '$status')";


  $res = $con->query($qry);

  if (!$res) {
    die("Booking Failed");
  } else
    $fnctn_msg = "success";
}
?>

<!--Hero Section-->
<div id="hero-carousel" class="carousel slide mt-5">

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true"
      aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./assets/img/slide/slide1.jpg" class="slide-img d-block w-100" alt="...">
      <div class="carousel-caption d-flex flex-column justify-content-center align-items-center top-0">
        <p class="mt-5 fs-3 text-uppercase text-center">One Time in Life</p>
        <h1 class="display-1 fw-bolder text-capitalize fc">Wedding Photoshoot</h1>
        <button class=" btn btn-danger fs-5 py-2 px-4 mt-5">Book Now</button>
      </div>
    </div>

    <div class="carousel-item">
      <img src="./assets/img/slide/slide2.jpg" class="slide-img d-block w-100" alt="...">
      <div class="carousel-caption d-flex flex-column justify-content-center align-items-center top-0">
        <p class="mt-5 fs-3 text-uppercase text-center">Enjoy Their Growth</p>
        <h1 class="display-1 fw-bolder text-capitalize">Portraits Photoshoot</h1>
        <button class=" btn-danger fs-5 py-2 px-4 mt-5">Book Now</button>
      </div>
    </div>

    <div class="carousel-item">
      <img src="./assets/img/slide/slide3.jpg" class="slide-img d-block w-100" alt="...">
      <div class="carousel-caption d-flex flex-column justify-content-center align-items-center top-0">
        <p class="fs-3 text-uppercase">Collect Memories.</p>
        <h1 class="display-1 fw-bolder">Special Event Photoshoot</h1>
        <button class="btn btn-danger fs-5 py-2 px-4 mt-5">Book Now</button>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!--Book your shooting-->

<div class="container my-5">
  <div class="row area-booking">
    <div class="col-md-2">
      <img src="./assets/img//LandingPage/1.jpg" class="mt-4 rounded-4 img-booking" alt="">
    </div>
    <div class=" col-md-2">
      <div>
        <img src="./assets/img//LandingPage/3.jpg" class=" mb-2 rounded-4 img-booking1" alt="">
      </div>
      <div>
        <img src="./assets/img//LandingPage/4.jpg" class="mt-2 rounded-4 img-booking1" alt="">
      </div>
    </div>
    <div class="col-md-2">
      <img src="./assets/img//LandingPage/booking4.jpg" class="mt-4 rounded-4 img-booking" alt="">
    </div>

    <div class="col-md-6 d-flex flex-column justify-content-center align-items-center ps-5 ">
      <div class="p-5 rounded-4 w-100 shadow-sm border">
        <form action="index.php" method="POST">
          <div class="row">
            <div class="col-6 mb-3">
              <label for="" class="form-label">Full Name</label>
              <input type="text" class="form-control" placeholder="" name="fname" required>
            </div>
            <div class="col-6 mb-3">
              <label for="" class="form-label">Phone Number</label>
              <input type="text" class="form-control" placeholder="" name="pnumber" required>
            </div>
          </div>
          <div class="row">
            <div class=" col-6 mb-3">
              <label for="" class="form-label">Category</label>
              <select class="form-select" aria-label="Default select example" name="category">
                <option value="wedding" name="wedding">Wedding</option>
                <option value="event" name="event">Event</option>
                <option value="other" name="other">Other</option>
              </select>
            </div>
            <div class="col-6 mb-3">
              <label for="" class="form-label">Package</label>
              <select class="form-select" aria-label="Default select example" name="package" value="package">
                <option value="pre" name="pre">Pre Wedding Shoot</option>
                <option value="bridal" name="bridal">Bridal Photoshoot</option>
                <option value="engagement" name="engagement">Engagment Photoshoot</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class=" col-6 mb-3">
              <label for="exampleFormControlInput1" class="form-label">Select Date</label>
              <input type="date" class="form-control" name="date">
            </div>
            <div class=" col-6 mb-3">
              <label for="exampleFormControlInput1" class="form-label">Starting Time</label>
              <input type="time" class="form-control" name="time">
            </div>
          </div>
          <input type="submit" value="Book Now!" class="btn btn-primary btn-lg w-100 mt-4">
        </form>
      </div>
    </div>
  </div>
</div>

<div class="color z-3"></div>

<!--Gallery-->
<section>
  <div class="container my-5">

    <div class="col-12 col-lg-8 col-xxl-7 text-center mx-auto">
      <span class="text-muted">From Gallery</span>
      <h2 class="display-5 fw-bold text-primary">Leatest Photos</h2>
      <p class="lead">Here are my latest captured memories featuring breathtaking landscapes, diverse natural wildlife, and captivating coastal birds.</p>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
        <img src="./assets/img/LandingPage/2.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

        <img src="./assets/img/LandingPage/5.jpg" class="w-100 shadow-1-strong rounded mb-4"
          alt="Wintry Mountain Landscape" />
      </div>

      <div class="col-lg-4 mb-4 mb-lg-0">
        <img src="./assets/img/LandingPage/11.jpg" class="w-100 shadow-1-strong rounded mb-4"
          alt="Mountains in the Clouds" />

        <img src="./assets/img/LandingPage/9.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
      </div>

      <div class="col-lg-4 mb-4 mb-lg-0">
        <img src="./assets/img/LandingPage/8.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

        <img src="./assets/img/LandingPage/12.jpg" class="w-100 shadow-1-strong rounded mb-4"
          alt="Yosemite National Park" />
      </div>
    </div>
    <div class="d-flex justify-content-end">
    <a href="packages.php" class="btn btn-outline-primary rounded-pill py-3 px-5 mt-3">View Gallery</a>
    </div>
    </div>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <div class="row mb-2 mb-lg-4">
      <div class="col-12 col-lg-8 col-xxl-7 w-100">
        <h2 class="display-5 fw-bold">Our Pricing</h2>
        <div class="d-flex justify-content-between align-items-center">
          <p class="lead pb-0">Discover our updated pakage list for your event.</p>
          <a href="packages.php" class="btn btn-outline-primary rounded-pill py-3 px-5 mt-0">View Packages</a>
        </div>
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-md">
        <div class="card text-center border-0 mb-3 mb-md-0">
          <img class="card-img-top rounded-top" src="./assets/img/PackagePage/preweddingshoot.jpg">
          <div class="card-body bg-danger rounded-bottom py-5">
            <h5 class="fw-bold">Pre Wedding Shoot</h5>
            <div class="d-flex justify-content-center">
              <div class="display-3 fw-bold text-primary mt-2">
                $60
              </div>
              <div class=" mt-5">
                / 01 Hour
              </div>
            </div>
            <ul class="list-unstyled mt-4">
              <li class="mb-3">Up to 40 photos</li>
              <li class="mb-3">Editing & Color Grading</li>
              <li class="mb-3">Stylist Assistance</li>
            </ul><a class="btn btn-outline-primary rounded-pill py-3 px-5 mt-3" href="">Book Appointment</a>
          </div>
        </div>
      </div>

      <div class="col-md">
        <div class="card text-center border-0 mb-3 mb-md-0">
          <img class="card-img-top" src="./assets/img/PackagePage/sports.jpg">
          <div class="card-body bg-danger rounded-bottom py-5">
            <h5 class="fw-bold">Sports Photo Shoot</h5>
            <div class="d-flex justify-content-center">
              <div class="display-3 fw-bold text-primary mt-2">
                $100
              </div>
              <div class=" mt-5">
                / Full Time
              </div>
            </div>
            <ul class="list-unstyled mt-4">
              <li class="mb-3">Up to 150 photos</li>
              <li class="mb-3">Editing & Color Grading</li>
              <li class="mb-3">Stylist Assistance</li>
            </ul><a class="btn btn-outline-primary rounded-pill py-3 px-5 mt-3" href="">Book Appointment</a>
          </div>
        </div>
      </div>

      <div class="col-md">
        <div class="card text-center border-0 mb-3 mb-md-0">
          <img class="card-img-top" src="./assets/img/PackagePage/meeting.jpg">
          <div class="card-body bg-danger rounded-bottom py-5">
            <h5 class="fw-bold">Industrial Photo Shoot</h5>
            <div class="d-flex justify-content-center">
              <div class="display-3 fw-bold text-primary mt-2">
                $40
              </div>
              <div class=" mt-5">
                / 01 Hour
              </div>
            </div>
            <ul class="list-unstyled mt-4">
              <li class="mb-3">Up to 30 photos</li>
              <li class="mb-3">Editing & Color Grading</li>
              <li class="mb-3">Stylist Assistance</li>
            </ul><a class="btn btn-outline-primary rounded-pill py-3 px-5 mt-3" href="">Book Appointment</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div aria-live="polite" aria-atomic="true" class="position-relative">
    <!-- Position it: -->
    <!-- - `.toast-container` for spacing between toasts -->
    <!-- - `top-0` & `end-0` to position the toasts in the upper right corner -->
    <!-- - `.p-3` to prevent the toasts from sticking to the edge of the container  -->
    <div class="toast-container top-0 end-0 p-3">
      <!-- Then put toasts within -->
      <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <img src="..." class="rounded me-2" alt="...">
          <strong class="me-auto">Bootstrap</strong>
          <small class="text-body-secondary">just now</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
          See? Just like this.
        </div>
      </div>

      <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <img src="..." class="rounded me-2" alt="...">
          <strong class="me-auto">Bootstrap</strong>
          <small class="text-body-secondary">2 seconds ago</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
          Heads up, toasts will stack automatically
        </div>
      </div>
    </div>
  </div>
</section>


<!--Footer-->
<?php
include './footer.php';
?>