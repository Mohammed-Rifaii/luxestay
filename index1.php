<?php

session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}
if (!isset($_SESSION['guest_house_id'])) 
  $_SESSION['guest_house_id']=1;
require 'db_connect.php';
$admin_id = $_SESSION['admin_id'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Home - LuxeStay</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!--icons-->
  <link href="assets/img/L-logo.png" rel="icon">
  <link href="assets/img/L-logo.png" rel="apple-touch-icon">

  <!-- fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files  CHECK LATER-->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

 
</head>

<body class="index-page">
 <?php
      include("header1.html");
  ?>

  <main class="main">

    
    <section id="hero" class="hero dark-background"> <!-- the dark background ensures the homepage main image isnt too bright-->

      <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000"><!-- data-bs-ride="carousel" means that the elements
                                                                                                          inside this element will scroll automatically
                                                                                                          and the time intervall is set inside data-bs-interval-->

        <div class="carousel-item active"> <!-- active is necessary else items won't show and won't auto scroll -->
          <img id="img1" alt="">
          <div class="carousel-container">
            <div>

              <p id="prop1_name"></p>
   
              <h2 id="prop1_location"></h2>
              <a href="property-single.php?guest_house_id=8" class="btn-get-started" style="height: 50px;"><p id="prop1_cost"></p></a>
            </div>
          </div>
        </div><!-- End Carousel Item -->

        < <div class="carousel-item"> <!-- active is necessary else items won't show and won't auto scroll -->
          <img id="img2" alt="">
          <div class="carousel-container">
            <div>

              <p id="prop2_name"></p>
   
              <h2 id="prop2_location"></h2>
              <a href="property-single.php" class="btn-get-started" style="height: 50px;"><p id="prop2_cost"></p></a>
            </div>
          </div>
        </div><!-- End Carousel Item -->
        <div class="carousel-item"> <!-- active is necessary else items won't show and won't auto scroll -->
          <img id="img3" alt="">
          <div class="carousel-container">
            <div>

              <p id="prop3_name"></p>
   
              <h2 id="prop3_location"></h2>
              <a href="property-single.php?guest_house_id=6" class="btn-get-started" style="height: 50px;"><p id="prop3_cost"></p></a>
            </div>
          </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev"><!-- data-bs-slide is bootstrap element 
                                                                                                for going back in carousel-->
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next"><!-- data-bs-slide is bootstrap element 
                                                                                                  for going forward in carousel-->
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol><!-- slide counter at the bottom-->

      </div>

    </section>





  </main>
  <?php
  include("footer1.html");
  ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div><!-- used as a preloader in case images or files take time to load-->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/retrieve-data-index.js"></script>
</body>

</html>