<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link rel="stylesheet" href="/src/main.css">
  <!-- Bootstrap ICON -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <link rel="stylesheet" href="/src/style.css">
</head>
<body>
    <header>
        <!-- Navigation Bar -->
        <nav class="navbar bg-primary p-2">
          <div class="container">
            <!-- Logo -->
            <div>
              <a class="navbar-brand" href="">
                <img src="/img/Logo-White.png"  alt="Esai Logo" height="45">
              </a>
            </div>
          </div>
        </nav>
      </header>
      <br> <br> <br> 
      <!--Contact us -->
      <div class="container1">
        <span class="big-circle"></span>
        <img src="img/shape.png" class="square" alt="" />
        <div class="form">
          <div class="contact-info">
            <h3 class="title">Let's get in touch</h3>
            <p class="text">
                Esai Studio - இசை
                Event Photography: Weddings, New Born Shoots, Birthdays
            </p>
  
            <div class="info">
              <div class="information">
                <img src="img/location.png" class="icon" alt="" />
                <p>Batticaloa, Sri Lanka</p>
              </div>
              <div class="information">
                <img src="img/email.png" class="icon" alt="" />
                <p>esaistudio6@gmail.com</p>
              </div>
              <div class="information">
                <img src="img/phone.png" class="icon" alt="" />
                <p>075 511 5475</p>
              </div>
            </div>
  
            <div class="social-media">
              <p>Connect with us :</p>
              <div class="social-icons">
                <a href="https://www.facebook.com/profile.php?id=100070496885311">
                  <i class="fab fa-facebook-f">
                    <img src="img/Fblogo.ico" alt="Fblogo" width="30" height="40">
                  </i>
                </a>
                <a href="#">
                  <i class="fab fa-twitter">
                    <img src="img/xlogo.ico" alt="xlogo" width="35" height="40">
                  </i>
                </a>
                <a href="https://www.instagram.com/esai_studio/?hl=en&fbclid=IwAR1FRY9HIpKW2fnQNNvt2db0Vvge5zNM4pMxCrrEkTIQDl8P6Ira35IEnJw">
                  <i class="fab fa-instagram">
                    <img src="img/Instagramlogo.ico" alt="Instagramlogo" width="30" height="40">
                  </i>
                </a>
                <a href="#">
                  <i class="fab fa-linkedin-in">
                    <img src="img/linkedinlogo.ico" alt="Fblogo" width="30" height="40">
                  </i>
                </a>
              </div>
            </div>
          </div>
  
          <div class="contact-form">
            <span class="circle one"></span>
            <span class="circle two"></span>
  
            <form action="index.html" autocomplete="off">
              <h3 class="title">Contact us</h3>
              <div class="input-container">
                <input type="text" name="name" class="input" />
                <label for="">Username</label>
                <span>Username</span>
              </div>
              <div class="input-container">
                <input type="email" name="email" class="input" />
                <label for="">Email</label>
                <span>Email</span>
              </div>
              <div class="input-container">
                <input type="tel" name="phone" class="input" />
                <label for="">Phone</label>
                <span>Phone</span>
              </div>
              <div class="input-container textarea">
                <textarea name="message" class="input"></textarea>
                <label for="">Message</label>
                <span>Message</span>
              </div>
              <input type="submit" value="Send" class="btn" />
            </form>
          </div>
        </div>
      </div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
   
    
</body>
</html>