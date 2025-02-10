<?php

session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
if (!isset($_SESSION['guest_house_id'])) 
  $_SESSION['guest_house_id']=1;
require 'db_connect.php';
$user_id = $_SESSION['user_id'];
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
      include("header.html");
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
              <a href="property-single.php?guest_house_id=4" class="btn-get-started" style="height: 50px;"><p id="prop3_cost"></p></a>
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



    
    <section id="agents" class="agents section">

      
      <div class="container section-title" >
        <h2>Our Agents</h2>
        <p>Our dedicated agents are here to assist you with bookings, special requests, and any inquiries. Whether you need travel recommendations or
          personalized services, our team is ready to help make your stay seamless and enjoyable.</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100"> <!-- makes the whole div have a delay to show with a fade up effect-->
                                                                      <!-- aos = animation of scroll-->
        <div class="row gy-5"> <!-- gy-5 stands for gutter vertically 5 pixels between each element and the other inside this div-->
                                <!-- mainly works for mobile view-->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100"><!-- lg4: for large screens divides the div into 12 sub 
                                                                                  columns and each element takes 1/3 -->
                                                                                  <!-- md6: for medium screen divides the div into 12 sub
                                                                                    cilumns and each element takes 6/12 -->
            <div class="member">
              <div class="pic"><img src="assets/img/team/team_1.jpg"  class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Elio Abdo</h4>
                <span>Booking & Reservations Staff</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic"><img src="assets/img/team/image2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Elia Abdel Massih</h4>
                <span>Guest Relations Staff</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amjad Rifaii</h4>
                <span> Maintenance Staff<br></span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- EACH DIV HAS A DIFFERENT AOS DELAY TO MAKE ANIMATION SMOOTHER data-aos-delay="100-200-300"-->
      </div>

    </section>


  </main>
  <?php
  include("footer.html");
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