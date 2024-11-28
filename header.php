<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grithub</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="assets/imgs/logo/favicon.png">

  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/meanmenu.min.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/master.css">
  <link rel="stylesheet" href="style.css">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">


</head>

<body>

  <!-- Go to Top -->
  <button class="cxu--go-top">
    <span class="icon-1"><img src="assets/imgs/shape/go-top.png" alt="Icon"></span>
    <span class="icon-2"><img src="assets/imgs/shape/go-top.png" alt="Icon"></span>
  </button>


  <!-- Preloader -->
  <div class="cxu-preloader">
    <div class="wrapper">
      <div class="lines">
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
        <span class="line line-4"></span>
        <span class="line line-5"></span>
        <span class="line line-6"></span>
        <span class="line line-7"></span>
        <span class="line line-8"></span>
        <span class="line line-9"></span>
      </div>
      <div class="text">Loading...</div>
    </div>
  </div>

  <div id="smooth-wrapper">
    <div id="smooth-content">

      <!-- Header section start -->
      <div class="container">
        <div class="row">
          <header class="header__area">
            <div class="col-md-2">
              <div class="header__logo">
                <a href="index.php"><img src="assets/imgs/home/logo.png" alt="Logo"></a>
              </div>
            </div>
            
            <!-- Toggle Button for Mobile View -->
            <div class="mobile-menu-toggle" onclick="toggleMobileMenu()">
              <span></span>
              <span></span>
              <span></span>
            </div>
            
            <div class="col-md-4 offset-md-5 header__menu" id="mobileMenu">
              <button class="close-menu" onclick="toggleMobileMenu()">✖</button>
              <nav class="main-menu">
                <ul>
                  <li><a href="#">About</a></li>
                  <li><a href="services.php">Services</a></li>
                  <li><a href="careers.php">Careers</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </nav>
            </div>
          </header>
        </div>
      </div>