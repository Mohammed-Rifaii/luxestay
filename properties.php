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

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="properties-page">

<?php
  include("header.html");
  include("db_connect.php");

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
     <form METHOD="POST">
    <section id="real-estate" class="real-estate section">

      <div class="container">
      
        <div class="row gy-4">

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img id="img1" alt="" class="img-fluid">
              
              <div class="card-body">
                <span class="sale-rent" id="prop1_cost"></span>
                <h3><a href="property-single.php?guest_house_id=1" class="stretched-link" id="prop1_name"></a></h3>
                <div class="card-content d-flex flex-column justify-content-center text-center">
                  <div class="row propery-info">
                    <div class="col">Area</div>
                    <div class="col">Beds</div>
                    <div class="col">Baths</div>
                    <div class="col">Garages</div>
                  </div>
                  <div class="row">
                    <div class="col" id="prop1_area"></div>
                    <div class="col" id= "prop1_beds"></div>
                    <div class="col" id="prop1_baths"></div>
                    <div class="col" id="prop1_garages"></div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Property Item -->

        
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <img id="img2" alt="" class="img-fluid">
              <div class="card-body">
                <span class="sale-rent" id="prop2_cost"></span>
                <h3><a href="property-single.php?guest_house_id=8" class="stretched-link" id="prop2_name"></a></h3>
                <div class="card-content d-flex flex-column justify-content-center text-center">
                  <div class="row propery-info">
                    <div class="col">Area</div>
                    <div class="col">Beds</div>
                    <div class="col">Baths</div>
                    <div class="col">Garages</div>
                  </div>
                  <div class="row">
                    <div class="col" id="prop2_area"></div>
                    <div class="col" id="prop2_beds"></div>
                    <div class="col" id="prop2_baths"></div>
                    <div class="col" id="prop2_garages"></div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Property Item -->


          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <img id="img3" alt="" class="img-fluid">
              <div class="card-body">
                <span class="sale-rent" id="prop3_cost"></span>
                <h3><a href="property-single.php?guest_house_id=6" class="stretched-link" id="prop3_name"></a></h3>
                <div class="card-content d-flex flex-column justify-content-center text-center">
                  <div class="row propery-info">
                    <div class="col">Area</div>
                    <div class="col">Beds</div>
                    <div class="col">Baths</div>
                    <div class="col">Garages</div>
                  </div>
                  <div class="row">
                    <div class="col"><p id="prop3_area"></p></div>
                    <div class="col"><p id="prop3_beds"></p></div>
                    <div class="col"><p id="prop3_baths"></p></div>
                    <div class="col"><p id="prop3_garages"></p></div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Property Item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img id="img4" alt="" class="img-fluid">
              
              <div class="card-body">
                <span class="sale-rent" id="prop4_cost"></span>
                <h3><a href="property-single.php?guest_house_id=4" class="stretched-link" id="prop4_name"></a></h3>
                <div class="card-content d-flex flex-column justify-content-center text-center">
                  <div class="row propery-info">
                    <div class="col">Area</div>
                    <div class="col">Beds</div>
                    <div class="col">Baths</div>
                    <div class="col">Garages</div>
                  </div>
                  <div class="row">
                    <div class="col" id="prop4_area"></div>
                    <div class="col" id= "prop4_beds"></div>
                    <div class="col" id="prop4_baths"></div>
                    <div class="col" id="prop4_garages"></div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Property Item -->

        
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <img id="img5" alt="" class="img-fluid">
              <div class="card-body">
                <span class="sale-rent" id="prop5_cost"></span>
                <h3><a href="property-single.php?guest_house_id=2" class="stretched-link" id="prop5_name"></a></h3>
                <div class="card-content d-flex flex-column justify-content-center text-center">
                  <div class="row propery-info">
                    <div class="col">Area</div>
                    <div class="col">Beds</div>
                    <div class="col">Baths</div>
                    <div class="col">Garages</div>
                  </div>
                  <div class="row">
                    <div class="col" id="prop5_area"></div>
                    <div class="col" id="prop5_beds"></div>
                    <div class="col" id="prop5_baths"></div>
                    <div class="col" id="prop5_garages"></div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Property Item -->


          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <img id="img6" alt="" class="img-fluid">
              <div class="card-body">
                <span class="sale-rent" id="prop6_cost"></span>
                <h3><a href="property-single.php?guest_house_id=5" class="stretched-link" id="prop6_name"></a></h3>
                <div class="card-content d-flex flex-column justify-content-center text-center">
                  <div class="row propery-info">
                    <div class="col">Area</div>
                    <div class="col">Beds</div>
                    <div class="col">Baths</div>
                    <div class="col">Garages</div>
                  </div>
                  <div class="row">
                    <div class="col"><p id="prop6_area"></p></div>
                    <div class="col"><p id="prop6_beds"></p></div>
                    <div class="col"><p id="prop6_baths"></p></div>
                    <div class="col"><p id="prop6_garages"></p></div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Property Item -->
</div>
</form>
    </section><!-- /Real Estate Section -->

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
  <Script src="assets/js/retrieve-data-properties.js"></script>

</body>

</html>