<!-- Navbar -->
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

  <title>Esai Photography</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <header>
    <!-- <nav class="navbar navbar-expand-lg fixed-top bg-light navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand fs-4 fw-bold text-bg-primary px-3 rounded-3" href="index.php">
          <img src="" alt="">
          Issai Studio</a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto align-items-center">
            <li class="nav-item">
              <a class="nav-link mx-3" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-3" href="packages.php">Packages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-3" href="booking.php">Booking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-3" href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-3" href="about.php">About</a>
            </li>
            <li class="nav-item ms-3">
              <a class="btn btn-outline-primary" href="Contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div> -->

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a href="#" class="navbar-brand">
                <img src="/examples/images/logo.svg" height="28" alt="CoolBrand">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="index.php" class="nav-item nav-link active me-3">Home</a>
                    <a href="packages.php" class="nav-item nav-link me-3">Packages</a>
                    <a href="booking.php" class="nav-item nav-link me-3">Booking</a>
                    <a href="Gallery.php" class="nav-item nav-link me-3">Gallery</a>
                    <a href="about.php" class="nav-item nav-link me-3">About</a>
                    <a href="Contact.php" class="btn btn-outline-primary px-3" >Contact</a>
                </div>
            </div>
        </div>
    </nav>
  </header>

  <?php
    include_once './includes/dbh.inc.php';
  ?>
  <!-- Navbar -->