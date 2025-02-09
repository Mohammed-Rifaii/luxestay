<?php
  session_start();
  if (!isset($_SESSION['user_id'])) {
      header("Location: login.php");
      exit();
  }
  
  
  $user_id = $_SESSION['user_id'];
  if (isset($_GET['guest_house_id'])){
        $_SESSION['guest_house_id']=$_GET['guest_house_id'];
  }
  
  require 'db_connect.php';
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Property Single - GuestHouse Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="assets/js/retrieve-reservations"></script>

 

  <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #2e7d32;
        }

        /* Calendar Container */
        #calendar-container {
          
            max-width: 600px;
            margin: 20px ;
            background:rgba(255, 255, 255, 0.68);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        

        /* Calendar Grid */
        #calendar {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
            padding: 10px;
        }

        /* Flexbox Layout for Portfolio and Calendar */


        #calendarNext {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
            padding: 10px;
        }

        /* Day Style */
        .day {
            padding: 15px;
            border-radius: 8px;
            background: #e8f5e9;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.2s;
            text-align: center;
        }
        .inline {
          display: inline;
        }

        .day:hover {
            background: #a5d6a7;
        }

        /* Selected Days */
        .selected {
            background: #4caf50 !important;
            color: white;
        }

        /* Disabled (Booked) Days */
        .disabled {
            background: #c8c8c8 !important;
            color: #777;
            cursor: not-allowed;
        }

        /* Reservation Info */
        #reservationDetails {
            margin-top: 15px;
            font-size: 16px;
            font-weight: bold;
            color: #388e3c;
        }

        /* Buttons */
        button {
            background: #388e3c;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 15px;
            transition: 0.3s;
        }

        button:hover {
            background: #2e7d32;
        }
    </style>
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

<body class="property-single-page">

<?php

  
  include("insert_reservation.php");
  include("header.html");
  ?>

  <main class="main" id="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="house_name" id="house_name"></h1>
              <p class="mb-0" id="house_description"></p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current" id="house_location"></li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Real Estate 2 Section -->
    <section id="real-estate-2" class="real-estate-2 section">

      <div class="container" data-aos="fade-up">

        <div class="portfolio-details-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">

            <div class="swiper-slide">
              <img id="image_field_1" alt="">
            </div>

            <div class="swiper-slide">
              <img id="image_field_2" alt="">
            </div>

            <div class="swiper-slide">
              <img id="image_field_3" alt="">
            </div>

          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-pagination"></div>
        </div>

        <div class="row d-flex justify-content-between gy-4 mt-4">

          <div class="col-lg-8" data-aos="fade-up">
              <div class="portfolio-description">
                <h2>About this Place</h2>
                <p id="guest_house_about">
                </p>
          </div>
          <form method="POST">
 <h2><b>Reservation Calendar:</b></h2>
 
    <div id="calendar-container">
        
        <div id="calendar"></div>
        <div id="calendarNext"></div>
        <p id="checkin">Select your reservation dates.</p>
        <p id="checkout"></p>
        <p id="totalNights"></p>
        <p id="price"></p>
        <input type="hidden" name="checkin_date" id="checkin_date">
        <input type="hidden" name="checkout_date" id="checkout_date">
        <input type="hidden" name="total_nights" id="total_nights">
        <input type="hidden" name="total_price" id="total_price">
        <input type="hidden" name="reserv_start" id="reserv_start">
        <input type="hidden" name="reserv_end" id="reserv_end">
        <input type="hidden" name="selected_dates" id="selected_dates">
        <button type="button" onclick="confirmReservation()">Confirm Reservation</button>
        
          </form>
          
    </div>
    
    

    
 </div><!-- End Portfolio Description -->
 
 <div class="row d-flex col-lg-3" data-aos="fade-up" data-aos-delay="100">
              <div class="portfolio-info">
                <h3>Quick Summary</h3>
                <ul>
                  <li><strong>Property ID:</strong><p id="property_id"></p></li>
                  <li><strong>Location:</strong><p id="property_location"></p></li>
                  <li"><strong>Property Type:</strong><p id="property_type"></p></li>
                  <li><strong>Status:</strong><p id="house_status">Rent</p> </li>
                  <li><strong>Area:</strong> <p class="house_area inline" id="house_area"></p></li>
                  <li><strong>Beds:</strong> <p id="house_beds"></p></li>
                  <li><strong>Baths:</strong><p id="house_baths"></p></li>
                  <li><strong>Garages:</strong><p id="house_garages"></p></li>
                  <li><strong>Rent:</strong><p id="house_costpn"></p></li>
                </ul>
              </div>
            </div>

    
    <script>
      
   const calendar = document.getElementById("calendar");
const calendarNext = document.getElementById("calendarNext");
const reservationDetails = document.getElementById("checkin");
const checkout = document.getElementById("checkout");
const totalNights = document.getElementById("totalNights");
const prices = document.getElementById("price");
let selectedStart = null;
let selectedEnd = null;
const pricePerNight = 120; // Price per night
let bookedDates=[];

// Example of booked dates (Disable them)

const today = new Date();
generateCalendar(today.getFullYear(), today.getMonth(), calendar); // Current month
generateCalendar(today.getFullYear(), today.getMonth() + 1, calendarNext); // Next month
</script>
             
          

           
            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="real-estate-2-tab1">

              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade" id="real-estate-2-tab2">
                <img src="assets/img/floor-plan.jpg" alt="" class="img-fluid">
              </div><!-- End Tab 2 Content -->

              <div class="tab-pane fade" id="real-estate-2-tab3">
                <iframe style="border:0; width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div><!-- End Tab 3 Content -->

            </div><!-- End Tab Content -->

          </div>

        

        </div>

      </div>

    </section><!-- /Real Estate 2 Section -->

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
  <script src="assets/js/retrieved-data.js"></script>
</body>

</html>
 