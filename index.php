<!-- Booking code -->
<?php
// require_once './pages/header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $fname = $_POST["fname"];
  $pnumber = $_POST['pnumber'];
  $category = $_POST['category'];
  $package = $_POST['package'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $status = "Unread";

  $qry = "INSERT INTO tbl_booking(fname, pnumber, category, package, date, time, status) VALUES('$fname', '$pnumber', '$category', '$package', '$date', '$time', '$status')";


  $res = $conn->query($qry);

  if (!$res) {
    die("Booking Failed");
  } else
    $fnctn_msg = "success";
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="
  ">
  <!-- Bootstrap ICON -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">

  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./css/style.css">

  <title>Esai Studio</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a href="./index.php" class="navbar-brand">
          <img src="./img/Logo/Esai Studio logo White.png" height="40" alt="Esai-Studio">
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
          <div class="navbar-nav ms-auto">
            <a href="index.php" class="nav-item nav-link active me-5">Home</a>
            <a href="packages.php" class="nav-item nav-link me-5">Packages</a>
            <a href="booking.php" class="nav-item nav-link me-5">Booking</a>
            <a href="Gallery.php" class="nav-item nav-link me-5">Gallery</a>
            <a href="about.php" class="nav-item nav-link me-5">About</a>
            <a href="Contact.php" class="btn btn-outline-secondary px-3">Contact</a>
          </div>
        </div>
      </div>
    </nav>
  </header>


  <!--Hero Section-->


  <!-- add Some Imformation Here -->

  <div class="container my-md-5 py-md-5">
    <div class="row py-5">
      <div class="d-md-flex">
        <div class="figure d-flex">
          <div class="col-md-2 col-xl-4 align-self-center">
            <img src="./img//LandingPage/1.jpg" class="figure-img p-2 img-fluid rounded-4 img-booking" alt="">
          </div>
          <div class="col-md-2 col-xl-4 ">
            <div>
              <img src="./img//LandingPage/3.jpg" class="mb-3 ms-md-3 p-2 figure-img img-fluid rounded-4 img-booking1" alt="">
            </div>
            <div>
              <img src="./img//LandingPage/booking4.jpg" class=" ms-md-3 p-2 figure-img img-fluid rounded-4 img-booking1" alt="">
            </div>
          </div>
          <div class="col-md-2 col-xl-4 align-self-center">
            <img src="./img//LandingPage/4.jpg" class="ms-md-4 p-2 figure-img img-fluid rounded-4 img-booking" alt="">
          </div>
        </div>

        <div class="col-md-6 ps-5  align-self-center">
          <div class="p-4 w-100">
            <div class="fs-1 fw-semibold">Welcome to Esai Studio</div>
            <hr>
            <div class="fs-5 lh-base mt-4 fw-light" style="text-align: justify;"> Esai Studio, founded by Vasi, is a professional wedding photography studio based in Batticaloa, Sri Lanka. With over 5 years of experience in wedding photography, event photography and Portraits, Vasi has perfected the art of capturing your most cherished moments.</div>
            <div class="d-flex">
              <div class="btn btn-primary rounded-pill py-3 px-4 mt-4 me-3"> Gallery</div>
              <div class="">
                <a href="./pages/booking.php" class="btn btn-outline-primary  rounded-pill py-3 px-4 mt-4">Book Now!<i class="bi bi-arrow-right-circle ms-2"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!--Gallery Section---->
  <section class="bg-primary my-md-5 py-md-5">
    <div class="container py-5 text-white">
      
      <div class="col-12 col-lg-8 col-xxl-7 ">
        <span class="text-white-50">From Gallery</span>
        <h2 class="display-5 fw-bold">Leatest Photos</h2>
        <p class="lead mb-5">Here are my latest captured memories featuring breathtaking landscapes, diverse natural wildlife, and captivating coastal birds.</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
          <img src="./img/LandingPage/2.jpg" class="w-100 shadow-1-strong rounded-4 mb-4" alt="Boat on Calm Water" />

          <img src="./img/LandingPage/5.jpg" class="w-100 shadow-1-strong rounded-4 mb-4" alt="Wintry Mountain Landscape" />
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
          <img src="./img/LandingPage/11.jpg" class="w-100 shadow-1-strong rounded-4 mb-4" alt="Mountains in the Clouds" />

          <img src="./img/LandingPage/9.jpg" class="w-100 shadow-1-strong rounded-4 mb-4" alt="Boat on Calm Water" />
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
          <img src="./img/LandingPage/8.jpg" class="w-100 shadow-1-strong rounded-4 mb-4" alt="Waves at Sea" />

          <img src="./img/LandingPage/12.jpg" class="w-100 shadow-1-strong rounded-4 mb-4" alt="Yosemite National Park" />
        </div>
      </div>
      <div class="d-flex justify-content-end">
        <a href="./pages/Gallery.php" class="btn btn-outline-secondary rounded-pill py-3 px-5 mt-3">View Gallery</a>
      </div>
    </div>
    </div>
  </section>

  <section class="py-5 my5">
    <div class="container">
    <div class="col-12 col-lg-8 col-xxl-7 ">
        <span class="text-black-50">Affortable Price</span>
        <h2 class="display-5 fw-bold">Basic Packages</h2>
        <p class="lead mb-5">Here are my latest captured memories featuring breathtaking landscapes, diverse natural wildlife, and captivating coastal birds.</p>
      </div>

      <div class="row mb-5">
        <div class="col-md">
          <div class="card text-center text-white border-0 mb-3 mb-md-0">
            <img class="card-img-top rounded-top" src="./img/PackagePage/prewedding.jpg">
            <div class="card-body bg-primary rounded-bottom py-5">
              <h5 class="fw-bold">Pre Wedding Shoot</h5>
              <div class="d-flex justify-content-center">
                <div class="display-3 fw-bold mt-2">
                  Rs.60
                </div>
                <div class=" mt-5">
                  / 01 Hour
                </div>
              </div>
              <ul class="list-unstyled mt-4">
                <li class="mb-3">Up to 40 photos</li>
                <li class="mb-3">Editing & Color Grading</li>
                <li class="mb-3">Stylist Assistance</li>
              </ul><a class="btn btn-outline-secondary rounded-pill py-3 px-5 mt-3" href="">Book Appointment</a>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card text-center text-white border-0 mb-3 mb-md-0">
            <img class="card-img-top" src="./img/PackagePage/sport.jpg">
            <div class="card-body bg-primary rounded-bottom py-5">
              <h5 class="fw-bold">Sports Photo Shoot</h5>
              <div class="d-flex justify-content-center">
                <div class="display-3 fw-bold mt-2">
                  Rs.100
                </div>
                <div class=" mt-5">
                  / Full Time
                </div>
              </div>
              <ul class="list-unstyled mt-4">
                <li class="mb-3">Up to 150 photos</li>
                <li class="mb-3">Editing & Color Grading</li>
                <li class="mb-3">Stylist Assistance</li>
              </ul><a class="btn btn-outline-secondary rounded-pill py-3 px-5 mt-3" href="">Book Appointment</a>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card text-center text-white border-0 mb-3 mb-md-0">
            <img class="card-img-top" src="./img/PackagePage/industrial.jpg">
            <div class="card-body bg-primary rounded-bottom py-5">
              <h5 class="fw-bold">Industrial Photo Shoot</h5>
              <div class="d-flex justify-content-center">
                <div class="display-3 fw-bold mt-2">
                  Rs.40
                </div>
                <div class=" mt-5">
                  / 01 Hour
                </div>
              </div>
              <ul class="list-unstyled mt-4">
                <li class="mb-3">Up to 30 photos</li>
                <li class="mb-3">Editing & Color Grading</li>
                <li class="mb-3">Stylist Assistance</li>
              </ul>
              <a class="btn btn-outline-secondary rounded-pill py-3 px-5 mt-3" href="">Book Appointment</a>
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
    require_once'footer.php';
  ?>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>