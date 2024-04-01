
<!doctype html>
  <html lang="en">
  
  <head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./src/main.css">
    <!-- Bootstrap ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
    <link rel="stylesheet" href="./src/style.css">
  
    <title>Esai Photography</title>
  </head>
        
  <body>
    <header>
      <!-- Navigation Bar -->
      <nav class="navbar bg-primary p-2">
        <div class="container">
          <!-- Logo -->
          <div>
            <a class="navbar-brand" href="">
              <img src="./img/Logo-White.png"  alt="Esai Logo" height="45">
            </a>
          </div>
          <!-- Nav Tabs -->
          <div class="mt-2">
            <ul class="nav justify-content-end">
              <li class="nav-item">
                <a class="nav-link text-danger me-5" href="">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-danger me-5" href="">Sevices</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-danger me-5" href="">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white me-5" href="">Packages</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-white" href="Contact.html">Contact Us</a>
              </li>
  
              <!--Dark Mode-->
              <li>
                <div class="form-switch ms-4 ">
                  <input
                    class="form-check-input px-4 py-3"
                    type="checkbox"
                    role="switch"
                    id="flexSwitchCheckChecked"
                    checked
                    onclick="myFunction()"
                  />
                </div>
              </li>
              <script>
                function myFunction() {
                var element = document.body;
                element.dataset.bsTheme =
                element.dataset.bsTheme == "light" ? "dark" : "light"
                }
              </script>
            </ul>
          </div>
        </div>
      </nav>
    </header>
  
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
          <h1>Book Your Shooting</h1>
          <p class="text-align:">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis minus, ipsum, harum magnam, atque doloribus saepe ab adipisci officia nihil praesentium nostrum? Tempora, accusantium ullam deserunt reprehenderit officia rem officiis.</p>
          <button class="bg-primary p-2 px-4 rounded-2"><a href="./src/packages.html">Book Now</a></button>
        </div>
      </div>
    </div>
  
  
    <!--Progress Bar-->
  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="container-fluid p-2 align-items-center">
            <div class="d-flex justify-content-around">
             <div>
              <button
              class="btn bg-primary text-white btn-sm rounded-pill "
              style="width: 50px; height: 50px">
              1
              </button>
              <p>Booking</p>
             </div>
              <span
                class="bg-success w-25 rounded mt-4 me-1 ms-1"
                style="height: 0.2rem">
              </span>
              <div>
                <button
                class="btn bg-primary text-white btn-sm rounded-pill"
                style="width: 50px; height: 50px">
                2
                </button>
                <P>Discuss</P>
              </div>
              <span
                class="bg-success w-25 rounded mt-4 me-1 ms-1"
                style="height: 0.2rem">
              </span>
              <div>
                <button
                class="btn bg-primary text-white btn-sm rounded-pill"
                style="width: 50px; height: 50px">
                3
                </button>
                <p>Shooting </p>
              </div>
              <span
                class="bg-success w-25 rounded mt-4 me-1 ms-1"
                style="height: 0.2rem">
              </span>
              <div>
                <button
                class="btn bg-primary text-white btn-sm rounded-pill"
                style="width: 50px; height: 50px">
                4
                </button>
                <p class="">Handover</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  
    <!--Gallery-->
    <section class="container py-5">
      <divc class="row">
        <div class="col-md-6">
          <h1>Photo Gallery</h1>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
          <a class="text-primary " href="">View Gallery <i class="bi bi-arrow-right"></i></a> 
        </div>
      </div>
  
      <div class="row p-0 m-0">
  
        <div class="col-md-4">
          <img src="./img/LandingPage/gallery1.jpg" class="w-100 h-100 rounded-4" alt="">
        </div>
  
        <div class="col-md-8 ">
          <div class="row mb-4">
            <div class="col-md-6">
              <img src="./img/LandingPage/gallery2.jpg" class="rounded-4 h-100 w-100" alt="">
            </div>
            <div class="col-md-6">
              <img src="./img/LandingPage/gallery3.jpg" class="rounded-4 h-100 w-100" alt="">
            </div>
          </div>
  
          <div class="row"> 
            <div class="col-md-12">
              <img src="./img/LandingPage/gallery4.jpg" class="rounded-4 h-100 w-100" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
  
  
    <!--Footer-->
    <footer class="bg-primary text-danger my-5 mb-0">
      <div class="container pt-5 pb-4">
        <div class="row">
          <div class="col-md-5">
            <img src="./img/Logo-White.png" class="mb-4" height="50px" alt="">
            <h5>Esai Studio</h5>
            <p>
              Esai Studio is a professional photography Studio that specializes in wedding photography, portrait photography, and event photography. We are based in Batticaloa, Sri Lanka.
            </p>
          </div> 
          <div class="col-md-3 ms-5 ps-5">
            <h5>Quick Links</h5>
            <li class="mb-2"><a href="">Home</a></li>
            <li class="mb-2"><a href="">Services</a></li>
            <li class="mb-2"><a href="">Gallery</a></li>
            <li class="mb-2"><a href="">Packages</a></li>
            <li><a href="">Contact Us</a></li>
          </div>
          <div class="col-md-3 ms-5 ps-5">
            <h5>Contact Us</h5>
            <p><a href=""><i class="bi bi-whatsapp pe-2"></i>076xxxxx</a></p>
            <p><a href=""><i class="bi bi-facebook pe-2"></i></i>Esai Studio</a></p>
            <p><a href=""><i class="bi bi-instagram pe-2"></i></i>Esai Studio</a></p>
            <p><a href=""><i class="bi bi-geo-alt pe-2"></i></i>Kalladi, Batiicaloa</a></p>
          </div>
        </div> 
      </div>
      <div class="bg-secondary text-center">
        <p class="py-2 mb-0">© 2024 Developed by <a href="http://cense7.com"><i><b>Cense7 Consultancy</b></i></a>.</p>
      </div>
    </footer>
  
  
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  
  </body>
  </html>
