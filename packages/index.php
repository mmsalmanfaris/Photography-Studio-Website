<!-- Header section -->
<?php
require_once '../headLinks.php';
?>
<title>Packages Esai Studio - Premium Photography: Wedding, Birthday, Modelling, Baby in Sri Lanka</title>

<meta charset="UTF-8">
<meta name="description"
  content="Are you Looking for affortable packages with premium photography services for weddings, birthdays, modeling, and baby photography in Sri Lanka.">
<meta name="keywords"
  content="photography packages, birthday photography Price, modelling price, baby photography price, photogrpahy packages Sri Lanka">
<meta name="author" content="Digital Partner">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index, follow">

</head>

<body>

  <?php
  require_once '../header.php';
  ?>

  <section class="py-5 ">
    <div class="container">
      <div class="row justify-content-center  mb-2 mb-lg-4 mt-5">
        <div class="col-12 col-lg-8 col-xxl-7 text-center mt-5">
          <span class="text-muted "> Our Pricing</span>
          <h2 class="display-5 fw-bold">Wedding Photo Shoot</h2>
          <p class="lead">Discover our updated pakage list for your event.</p>
        </div>
      </div>

      <!-- Reteriving Data from database -->
      <?php
      $qry = "SELECT * FROM tbl_package WHERE category = 'wedding'";

      $res = $pdo->query($qry);

      ?>
      <div class="row">
        <?php
        if (!$res) {
          die("Package Data not Found!");
        } else {
          for ($i = 0; $i < 3; $i++) {
            $row = $res->fetch(PDO::FETCH_ASSOC)
              ?>
            <div class="col-md">

              <div class="card text-center border-0 mb-3 mb-md-0">
                <img class="card-img-top rounded-top" src="./assets/img/PackagePage/<?php echo $row['image'] ?>">
                <div class="card-body bg-danger rounded-bottom py-5">
                  <h5 class="fw-bold"><?php echo $row['name'] ?></h5>
                  <div class="d-flex justify-content-center">
                    <div class="display-3 fw-bold text-primary mt-2">
                      $<?php echo $row['price'] ?>
                    </div>
                    <div class=" mt-5">
                      /0<?php echo $row['duration'] ?> Hours
                    </div>
                  </div>
                  <ul class="list-unstyled mt-4">
                    <li class="mb-3">Up to <?php echo $row['photo_count'] ?> photos</li>
                    <li class="mb-3"><?php echo $row['editing'] ?></li>
                    <li class="mb-3"><?php echo $row['assistant'] ?></li>
                  </ul><a class="btn btn-outline-primary rounded-pill py-3 px-5 mt-3" href="">Book Appointment</a>
                </div>
              </div>
            </div>
            <?php
          }
        }
        ?>

      </div>


      <section class="py-5 ">
        <div class="container">
          <div class="row justify-content-center  mb-2 mb-lg-4">
            <div class="col-12 col-lg-8 col-xxl-7 text-center mt-4">
              <span class="text-muted "> Our Pricing</span>
              <h2 class="display-5 fw-bold">Event Photo Shoot</h2>
              <p class="lead">Discover our pakage list for your event.</p>
            </div>
          </div>
          <?php
          $qry = "SELECT * FROM tbl_package WHERE category = 'event'";

          $res = $pdo->query($qry);

          ?>
          <div class="row">
            <?php
            if (!$res) {
              die("Package Data not Found!");
            } else {
              for ($i = 0; $i < 3; $i++) {
                $row = $res->fetch(PDO::FETCH_ASSOC)
                  ?>
                    <div class="col-md">
                      <div class="card border-0 shadow-sm overflow-hidden h-100 rounded-4">
                        <!-- Image Section -->
                        <div class="position-relative">
                          <img class="card-img-top rounded-top-4 img-fluid" src="./img/package/<?php echo $row['image'] ?>" alt="" loading="lazy" style="height: 200px; object-fit: cover;">
                        </div>

                        <!-- Content Section -->
                        <div class="card-body bg-primary text-white p-4 d-flex flex-column">
                          <h4 class="fw-bold mb-3"><?php echo $row['name'] ?></h4>

                          <!-- Pricing -->
                          <div class="d-flex align-items-end mb-4">
                            <span class="display-6 fw-bold me-2">₹<?php echo $row['price'] ?></span>
                            <p class="text-white-50">/ <?php echo $row['duration'] ?> Hour</p>
                          </div>

                          <!-- Features -->
                          <ul class="list-unstyled mb-4 small">
                            <li class="mb-2"><i class="bi bi-check-circle-fill me-2"></i>Up to <?php echo $row['photo_count'] ?> edited photos</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill me-2"></i><?php echo $row['editing'] ?></li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill me-2"></i><?php echo $row['assistant'] ?></li>
                          </ul>

                          <!-- CTA Button -->
                          <a href="./booking.php" class="btn btn-light mt-auto rounded-pill py-2 fw-semibold">
                            Book Appointment <i class="bi bi-arrow-right ms-2"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                <?php
              }
            }
            ?>

          </div>
        </div>
    </div>
  </section>

  <?php
  require_once '../footer.php';
  ?>