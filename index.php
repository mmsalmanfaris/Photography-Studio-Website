<!-- Booking code -->
<?php
require_once 'header.php';
?>
</head>

<body>

  <!--Hero Section-->
  <div id="hero-carousel" class="carousel slide">

    <div class="carousel-indicators">
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./img/slide/slide1.webp" class="slide-img d-block w-100" alt="..." loading="lazy">
        <div class="carousel-caption d-flex flex-column justify-content-center align-items-center top-0">
          <p class="mt-5 fs-3 text-uppercase text-center">One Time in Life</p>
          <h1 class="display-1 fw-bolder text-capitalize fc">Wedding Photoshoot</h1>
          <a href="./booking.php" class="btn btn-outline-secondary  rounded-pill py-3 px-4 mt-4">View Packages<i class="bi bi-arrow-right-circle ms-2"></i></a>
        </div>
      </div>

      <div class="carousel-item">
        <img src="./img/slide/slide2.webp" class="slide-img d-block w-100" alt="..." loading="lazy">
        <div class="carousel-caption d-flex flex-column justify-content-center align-items-center top-0">
          <p class="mt-5 fs-3 text-uppercase text-center">Enjoy Their Growth</p>
          <h1 class="display-1 fw-bolder text-capitalize">Portraits Photoshoot</h1>
          <button class=" btn-danger fs-5 py-2 px-4 mt-5">Book Now</button>
        </div>
      </div>

      <div class="carousel-item">
        <img src="./img/slide/slide3.webp" class="slide-img d-block w-100" alt="..." loading="lazy">
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

  <!-- add Some Imformation Here -->

  <div class="container my-md-5 py-md-5">
    <div class="row py-5">
      <div class="d-md-flex">
        <div class="figure d-flex">
          <div class="col-md-2 col-xl-4 align-self-center">
            <img src="./img/landing/1.webp" class="figure-img p-2 img-fluid rounded-4 img-booking" alt="" loading="lazy">
          </div>
          <div class="col-md-2 col-xl-4 ">
            <div>
              <img src="./img/landing/3.webp" class="mb-3 ms-md-3 p-2 figure-img img-fluid rounded-4 img-booking1" alt="" loading="lazy">
            </div>
            <div>
              <img src="./img/landing/booking3.webp" class=" ms-md-3 p-2 figure-img img-fluid rounded-4 img-booking1" alt="" loading="lazy">
            </div>
          </div>
          <div class="col-md-2 col-xl-4 align-self-center">
            <img src="./img/landing/4.webp" class="ms-md-4 p-2 figure-img img-fluid rounded-4 img-booking" alt="" loading="lazy">
          </div>
        </div>

        <div class="col-md-6 ps-5  align-self-center">
          <div class="p-4 w-100">
            <div class="fs-1 fw-semibold">Welcome to Esai Studio</div>
            <hr>
            <div class="fs-5 lh-base mt-4 fw-light" style="text-align: justify;"> Esai Studio, founded by Vasi, is a professional wedding photography studio based in Batticaloa, Sri Lanka. With over 5 years of experience in wedding photography, event photography and Portraits, Vasi has perfected the art of capturing your most cherished moments.</div>
            <div class="d-flex">
              <div>
                <a href="./gallery.php" class="btn btn-primary rounded-pill py-3 px-4 mt-4 me-3">Gallery</a>
              </div>
              <div class="">
                <a href="./packages.php" class="btn btn-outline-primary  rounded-pill py-3 px-4 mt-4">View Packages<i class="bi bi-arrow-right-circle ms-2"></i></a>
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
          <img src="./img/landing/2.webp" class="w-100 shadow-1-strong rounded-4 mb-4" alt="Boat on Calm Water" loading="lazy" />

          <img src="./img/landing/5.webp" class="w-100 shadow-1-strong rounded-4 mb-4" alt="Wintry Mountain Landscape" loading="lazy" />
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
          <img src="./img/landing/11.webp" class="w-100 shadow-1-strong rounded-4 mb-4" alt="Mountains in the Clouds" loading="lazy" />

          <img src="./img/landing/9.webp" class="w-100 shadow-1-strong rounded-4 mb-4" alt="Boat on Calm Water" loading="lazy" />
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
          <img src="./img/landing/8.webp" class="w-100 shadow-1-strong rounded-4 mb-4" alt="Waves at Sea" loading="lazy" />

          <img src="./img/landing/12.webp" class="w-100 shadow-1-strong rounded-4 mb-4" alt="Yosemite National Park" loading="lazy" />
        </div>
      </div>
      <div class="d-flex justify-content-end">
        <a href="./gallery.php" class="btn btn-outline-secondary rounded-pill py-3 px-4 mt-3">View Gallery<i class="bi bi-arrow-right-circle ms-2"></i></a>
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
            <img class="card-img-top rounded-top" src="./img/package/prewedding.webp" loading="lazy">
            <div class="card-body bg-primary rounded-bottom py-5">
              <h5 class="fw-bold">Pre Wedding Shoot</h5>
              <div class="d-flex justify-content-center">
                <div class="display-3 fw-bold mt-2">
                  10000
                </div>
                <div class=" mt-5">
                  / 01 Hour
                </div>
              </div>
              <ul class="list-unstyled mt-4">
                <li class="mb-3">Up to 40 photos</li>
                <li class="mb-3">Editing & Color Grading</li>
                <li class="mb-3">Stylist Assistance</li>
              </ul><a class="btn btn-outline-secondary rounded-pill py-3 px-5 mt-3" href="./booking.php">Book Appointment</a>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card text-center text-white border-0 mb-3 mb-md-0">
            <img class="card-img-top" src="./img/package/sport.webp" loading="lazy">
            <div class="card-body bg-primary rounded-bottom py-5">
              <h5 class="fw-bold">Sports Photo Shoot</h5>
              <div class="d-flex justify-content-center">
                <div class="display-3 fw-bold mt-2">
                  15000
                </div>
                <div class=" mt-5">
                  / Full Time
                </div>
              </div>
              <ul class="list-unstyled mt-4">
                <li class="mb-3">Up to 150 photos</li>
                <li class="mb-3">Editing & Color Grading</li>
                <li class="mb-3">Stylist Assistance</li>
              </ul><a class="btn btn-outline-secondary rounded-pill py-3 px-5 mt-3" href="./booking.php">Book Appointment</a>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card text-center text-white border-0 mb-3 mb-md-0">
            <img class="card-img-top" src="./img/package/industrial.webp" loading="lazy">
            <div class="card-body bg-primary rounded-bottom py-5">
              <h5 class="fw-bold">Industrial Photo Shoot</h5>
              <div class="d-flex justify-content-center">
                <div class="display-3 fw-bold mt-2">
                  20000
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
              <a class="btn btn-outline-secondary rounded-pill py-3 px-5 mt-3" href="./booking.php">Book Appointment</a>
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
  require_once 'footer.php';
  ?>

</body>

</html>