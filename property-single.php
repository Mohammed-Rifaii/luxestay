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
  <script src="assets/js/retrieve-reservations.js"></script>

 

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
        

        /* Flexbox Layout for Portfolio and Calendar */


        #calendar1, #calendar2,#calendar3, #calendar4, #calendar5,#calendar6 {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
            padding: 10px;
        }

        
        .monthdiv{
          display:flex;
          padding: 15px;
          height:100%;
          justify-content: center;
          align-items: center; 
          text-align:center;
            border-radius: 8px;
            background:rgb(61, 184, 133);
            font-weight: bold;
            transition: all 0.2s;
            text-align: center;
            

            

        }/* Day Style */
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

        #hero-carousel {
  position: relative;
}



        /* Buttons */
        button {
            background: #2eca6a;
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
.carousel-item {
  visibility: hidden; /* Hide inactive slides */
  opacity: 0;
  transition: opacity 0.5s ease, visibility 0.5s ease;
  position: absolute; /* Ensure slides don't stack on top of each other */
  top: 0;
  left: 0;
  width: 100%;
  
}

.carousel-item.active {
  visibility: visible; /* Show active slide */
  opacity: 1;
  position: relative; /* Bring active slide to the front */
}

.cycle{
  border-radius:17px;
  background-color: #2eca6a;
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
  include("header.php");
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
          <form id="reservation-form" method="POST">
 <h2><b>Reservation Calendar:</b></h2>
 
    <div id="calendar-container">
        <section id="calendar-section" class="calendar section">
        <div id="hero-carousel" class="carousel slide">
          <div class="carousel-inner">
                <div id="calendar1" class="carousel-item  active"></div>
                <div id="calendar2" class="carousel-item"></div>
                <div id="calendar3" class="carousel-item"></div>
                <div id="calendar4" class="carousel-item"></div>
                <div id="calendar5" class="carousel-item"></div>
                <div id="calendar6" class="carousel-item"></div>
          </div>
          <div class="d-flex justify-content-center">
          <div class=" d-flex justify-content-between" style="width:300px;">
          <button class="cycle" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
  <span class="bi bi-chevron-left"></span>
</button>
          <button class="cycle" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
  <span class="bi bi-chevron-right"></span>
</button>
          </div>
          </div>
        </div>
        
        </section>

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
      
   const calendar = document.getElementById("calendar1");
const calendar2 = document.getElementById("calendar2");
const calendar3= document.getElementById("calendar3");
const calendar4 = document.getElementById("calendar4");
const calendar5 = document.getElementById("calendar5");
const calendar6= document.getElementById("calendar6");
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
generateCalendar(today.getFullYear(), today.getMonth()+1, calendar);
generateCalendar(today.getFullYear(), today.getMonth() + 2, calendar2); 
generateCalendar(today.getFullYear(), today.getMonth() + 3, calendar3);
generateCalendar(today.getFullYear(), today.getMonth() + 4, calendar4); 
generateCalendar(today.getFullYear(), today.getMonth() + 5, calendar5); 
generateCalendar(today.getFullYear(), today.getMonth() + 6, calendar6); 

                        
</script>
             
          

       
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
 