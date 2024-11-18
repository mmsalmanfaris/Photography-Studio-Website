<?php
require_once 'headLinks.php';
?>

<title>Booking Esai Studio - Premium Photography: Wedding, Birthday, Modelling, Baby in Sri Lanka</title>

<meta charset="UTF-8">
<meta name="description"
  content="Are you Looking for premium photography services for weddings, birthdays, modeling, and baby photography in Sri Lanka. Book your shoot via esai studio website.">
  <meta name="keywords"
  content="booking photography, birthday photography booking, modelling, baby photography, online photogrpahy booking Sri Lanka">
  <meta name="author" content="Digital Partner">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="index, follow">
  
  <!-- cloudflare captcha -->
  <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" ></script>


</head>

<body>

  <?php
  require_once 'header.php';
  require_once './includes/booking.inc.php';
  ?>

  <!--Book your shooting-->
  <div class="container ">
    <div class="row area-booking">
      <div class="col-12 ">
        <div class="col-12 text-center">
          <h2 class="display-5 fw-bold text-primary">Book Your Photoshoot</h2>
          <p class="lead">Our team will contact you throught phone call within an hour.</p>
        </div>
        <div class="booking-section p-xl-5 p-4 rounded-4 w-100 shadow-sm border">
          <form action="./includes/booking.inc.php" method="POST">
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
                <label for="exampleFormControlInput1" class="form-label">Email Address</label>
                <input type="email" class="form-control form-control-lg" name="email">
              </div>
            </div>
            <div class="row">
              <div class="col-xxl-4 col-12 mb-3">
                <label for="" class="form-label">Category</label>
                <select class="form-select form-select-lg" aria-label="Default select example" name="category">
                  <option value="wedding" name="wedding">Wedding</option>
                  <option value="event" name="event">Event</option>
                  <option value="event" name="event">Birth Day</option>
                  <option value="other" name="other">Other</option>
                </select>
              </div>
              <div class="col-xxl-4 col-12 mb-3">
                <label for="" class="form-label">Package</label>
                <select class="form-select form-select-lg" aria-label="Default select example" name="package"
                  value="package">
                  <option value="pre" name="pre">Pre Wedding Shoot</option>
                  <option value="bridal" name="bridal">Bridal Photoshoot</option>
                  <option value="engagement" name="engagement">Engagment Photoshoot</option>
                </select>
              </div>
              <div class="col-xxl-4 col-sm-12 mb-3">
                <label for="exampleFormControlInput1" class="form-label">Select Date</label>
                <input type="datetime-local" class="form-control form-control-lg" name="date">
              </div>
            </div>

            <input type="submit" value="Book Now!" class="btn btn-primary btn-lg w-100 mt-4">

          </form>
          
        </div>
        <div class="cf-turnstile text-center mt-5" data-sitekey="0x4AAAAAAA0RjmJcphJ27X-L"></div>
        <script src="./js/app.js"></script>
        <script>
            window.onloadTurnstileCallback();
        </script>

      </div>
    </div>
  </div>


  <?php
  require_once "footer.php";
  submit_message();


