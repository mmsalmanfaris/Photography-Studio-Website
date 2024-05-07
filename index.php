
<!doctype html>
  <html lang="en">
  
  <head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./src/main.css">

    <!-- Bootstrap ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  
    <link rel="stylesheet" href="./src/style.css">
  
    <title>Esai Photography</title>
  </head>
        
  <body>
      <!-- Navigation Bar -->
      <?php
        include './src/header.php';
      ?>
      
  
    <!--Hero Section-->
    <div id="hero-carousel" class="carousel slide">
  
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>    
  
      <div class="carousel-inner">
  
        <div class="carousel-item active">
          <img src="./img/slide/slide1.jpg" class="slide-img d-block w-100" alt="...">
          <div class="carousel-caption d-flex flex-column justify-content-center align-items-center top-0">
              <p class="mt-5 fs-3 text-uppercase text-center">One Time in Life</p>
              <h1 class="display-1 fw-bolder text-capitalize fc">Wedding Photoshoot</h1>
              <button class=" btn btn-danger fs-5 py-2 px-4 mt-5 bi bi-arrow-right-circle-fill">Book Now</button>
          </div>
        </div>
    
        <div class="carousel-item">
          <img src="./img/slide/slide2.jpg" class="slide-img d-block w-100" alt="...">
          <div class="carousel-caption d-flex flex-column justify-content-center align-items-center top-0">
            <p class="mt-5 fs-3 text-uppercase text-center">Enjoy Their Growth</p>
            <h1 class="display-1 fw-bolder text-capitalize">Birth Day Photoshoot</h1>
            <button class=" btn-danger fs-5 py-2 px-4 mt-5 bi bi-arrow-right-circle-fill">Book Now</button>
          </div>
        </div>
  
        <div class="carousel-item">
          <img src="./img/slide/slide3.jpg" class="slide-img d-block w-100" alt="...">
          <div class="carousel-caption d-flex flex-column justify-content-center align-items-center top-0">
            <p class="fs-3 text-uppercase">Collect Memories.</p>
            <h1 class="display-1 fw-bolder">Bridal Photoshoot</h1>
            <button class="btn btn-danger fs-5 py-2 px-4 mt-5 bi bi-arrow-right-circle-fill">Book Now</button>
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
          <img src="./img/LandingPage/booking1.jpg" class="mt-4 rounded-4 img-booking" alt="">
        </div>
        <div class=" col-md-2">
          <div>
            <img src="./img/LandingPage/booking2.jpg" class=" mb-2 rounded-4 img-booking1" alt="">
          </div>
          <div>
            <img src="./img/LandingPage/booking3.jpg" class="mt-2 rounded-4 img-booking1" alt="">
          </div>
        </div>
        <div class="col-md-2">
          <img src="./img/LandingPage/booking4.jpg" class="mt-4 rounded-4 img-booking" alt="">
        </div>
  
        <div class="col-md-6 d-flex flex-column justify-content-center align-items-start ps-5">
          <h1 class="fw-bold">Book Your Shooting</h1>
          <p class=" mb-4 mt-2 fs-5">To transform your moments into cherished memories, simply choose your desired package and confirm your booking by making an initial payment. Capture the magic today!</p>
          <button class="bg-primary p-2 pt-3 px-4 rounded-2 border-0"> <h5><a href="">Book Now</a></h5></button>
        </div>
      </div>
    </div>
  
    <div class="color z-3"></div>

    <!--Latest Photoshoots-->

    <section>        
      <div class="container">
        <div class="my-md-5">
          <h1 class=" display-1 fw-bold text-center">Latest Photo Shoots</h1>
        </div>

        <div class="d-flex justify-content-around">
          <div class="card-group container mb-5">
            <div class="card">
              <img src="./img/LandingPage/booking4.jpg" class="h-75 object-fit-cover card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title">Wedding Photoshoot</h3>
                <p class="card-text">
                <span class="material-symbols-outlined danger"> Distance </span>
                Lee Marideian Hall, kalmunai. </p>
                <p class="card-text"> <span class="material-symbols-outlined danger"> calendar_month </span> 
                <small class="text-body-secondary">10th May 2024</small></p>
                <button type="button" class="btn btn-primary">View More Images</button>
              </div>
            </div>
            <div class="card">
              <img src="./img/LandingPage/booking2.jpg" class="h-75 object-fit-cover card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title">Wedding Photoshoot</h3>
                <p class="card-text">
                <span class="material-symbols-outlined danger"> Distance </span>
                Lee Marideian Hall, kalmunai. </p>
                <p class="card-text"> <span class="material-symbols-outlined danger"> calendar_month </span> 
                <small class="text-body-secondary">10th May 2024</small></p>
                <button type="button" class="btn btn-primary">View More Images</button>
              </div>
            </div>
            <div class="card">
              <img src="./img/LandingPage/booking1.jpg" class="h-75 object-fit-cover card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title">Wedding Photoshoot</h3>
                <p class="card-text">
                <span class="material-symbols-outlined danger"> Distance </span>
                Lee Marideian Hall, kalmunai. </p>
                <p class="card-text"> <span class="material-symbols-outlined danger"> calendar_month </span> 
                <small class="text-body-secondary">10th May 2024</small></p>
                <button type="button" class="btn btn-primary">View More Images</button>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section> 
  
  
    <!--Gallery-->
    <section>
      <div class="container my-5">

        <div class="my-md-5">
          <h1 class=" display-1 fw-bold text-center">Photo Gallery</h1>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <img
              src="./img/slide/slide1.jpg"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Boat on Calm Water"
            />

            <img
              src="./img/LandingPage/booking1.jpg"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Wintry Mountain Landscape"
            />
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0">
            <img
              src="./img/LandingPage/booking1.jpg"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Mountains in the Clouds"
            />

            <img
              src="./img/slide/slide1.jpg"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Boat on Calm Water"
            />
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0">
            <img
              src="./img/slide/slide1.jpg"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Waves at Sea"
            />

            <img
              src="./img/LandingPage/booking1.jpg"
              class="w-100 shadow-1-strong rounded mb-4"
              alt="Yosemite National Park"
            />
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
      include './src/footer.php';
    ?>
  
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  
  </body>
  </html>
