<?php
require_once 'header.php';
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

    <?php
    $qry = "SELECT * FROM tbl_package WHERE category = 'wedding'";

    $res = $con->query($qry);

    ?>
    <div class="row">
      <?php
      if (!$res) {
        die("Package Data not Found!");
      } else {
        for ($i = 0; $i < 3; $i++) {
          $row = $res->fetch_assoc()
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

    $res = $con->query($qry);

    ?>
    <div class="row">
      <?php
      if (!$res) {
        die("Package Data not Found!");
      } else {
        for ($i = 0; $i < 3; $i++) {
          $row = $res->fetch_assoc()
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
        </div>
      </div>
    </section>

    <?php
    require_once 'footer.php';
    ?>