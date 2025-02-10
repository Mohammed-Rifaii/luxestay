<?php

session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

require 'db_connect.php';
$user_id = $_SESSION['user_id'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Properties - LuxeStay</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/L-logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<style>
  .carousel {
    height: 100%; /* Ensure full height */
    width: 80%;
    overflow: hidden; /* Hide any overflowing content */
}
#real-estate {
    position: relative; /* Ensure the section is the reference for absolute positioning */
}

.carousel-control-prev,
.carousel-control-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%); /* Center vertically */
    z-index: 5; /* Ensure arrows are above other elements */
    background-color: rgba(0, 0, 0, 0.2); /* Optional: adds a slight background color to the arrows */
    border-radius: 50%; /* Make the buttons circular */
    width: 40px; /* Adjust size as needed */
    height: 40px; /* Adjust size as needed */
    display: flex;
    align-items: center;
    justify-content: center;
}

.carousel-control-prev {
    left: -50px; /* Position the 'previous' button outside the carousel */
}

.carousel-control-next {
    right: -50px; /* Position the 'next' button outside the carousel */
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: #2eca6a; /* Ensure the arrows are visible */
    width: 20px; /* Adjust size as needed */
    height: 20px; /* Adjust size as needed */
}

.cycle {
    border: 0;
    background-color: #2eca6a;
    height: 70px;
    width: 70px;
    margin: 100px;
    margin-bottom: 0;
    border-radius: 10px;

}

</style>
  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="properties-page">

<?php
  include("header.html");
  ?>
  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Properties</h1>
              <p class="mb-0">Discover our comfortable and well-equipped rental properties,
                  perfect for short and long stays. Whether you're looking for a cozy private room, 
                 a spacious family suite, or an entire guesthouse for a group getaway, 
                 we have options to suit every need. Our properties offer modern amenities, a relaxing atmosphere,
                 and easy access to local attractions, ensuring a memorable stay.
                  Book your perfect retreat today!</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Properties</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Real Estate Section -->
    <!-- Real Estate Section with Carousel -->
<!-- Real Estate Section with Carousel -->

<form METHOD="POST">
    <section id="real-estate" class="real-estate section">
        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner"></div>
            <!-- Chevron Buttons -->
        </div>
    </section><!-- /Real Estate Section -->
</form>
  </main>

  <?php
  include("footer.html");
  ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/retrieve-data-properties.js"></script>
</body>

</html>