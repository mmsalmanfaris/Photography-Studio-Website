<?php
require_once './includes/config_session.inc.php';
require_once './includes/login_view.inc.php';
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
  <section class="vh-100">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-8 col-lg-6 col-xl-5">
          <div class="card rounded-4">
            <div class="card-body p-4 p-lg-5 text-black">
              <form action="./includes/login.inc.php" method="post">

                <div class="mb-5 text-center">
                  <img src="./img/Logo/Esai Studio logo black.png" alt="Esai Studio Logo" style="height: 100px;">
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="username">Username</label>
                  <input type="text" id="username" name="username" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="password">Password</label>
                  <input type="password" id="password" name="password" class="form-control form-control-lg" />
                </div>

                <div class="pt-1 mb-4 text-center">
                  <button class="btn btn-dark btn-lg btn-block w-100" type="submit">Login</button>
                </div>

                <?php
                check_login_errors();
                ?>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>