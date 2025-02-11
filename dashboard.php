<?php
session_start();
if($_SESSION['urole']!="admin")
  header("Location:index.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f8f9fa;
    }
    .sidebar {
      height: 100vh;
      background-color: #2eca6a;
      color: #fff;
      padding: 20px;
    }
    .sidebar a {
      color: #fff;
      text-decoration: none;
      display: block;
      padding: 10px 0;
    }
    .sidebar a:hover {
      background-color: white;
      color: #2eca6a;
    }
    .main-content {
      padding: 20px;
    }
    .stats-card {
      transition: transform 0.3s;
      border: none;
      border-radius: 10px;
    }
    .stats-card:hover {
      transform: translateY(-5px);
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
       <?php
      include("dashboard-header.html");
      ?>
      <!-- Main Content -->
      <div class="col-md-10" style="margin-left:350px;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <h1 style="color: #2eca6a;">Admin Panel</h1></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              
            </div>
          </div>
        </nav>

        <!-- Main Content Area -->
        <div class="main-content">
         <?php
         include 'db_connect.php';
         $user_query = "SELECT COUNT(user_id) AS total_users FROM users";   
         $user_result = mysqli_query($conn, $user_query);
         $total_users = ($user_result && mysqli_num_rows($user_result) > 0) ? mysqli_fetch_assoc($user_result)['total_users'] : 0;

         $reservation_query = "SELECT COUNT(reservation_id) AS total_reservations FROM reservations";
         $reservation_result = mysqli_query($conn, $reservation_query);
         $total_reservations = ($reservation_result && mysqli_num_rows($reservation_result) > 0) ? mysqli_fetch_assoc($reservation_result)['total_reservations'] : 0;
         ?>

<div class="container-fluid">
  <div class="row g-4 mb-4">
    <div class="col-12 col-sm-6 col-xl-3">
      <div style="background-color: #2eca6a !important;" class="card stats-card bg-dark text-white">
        <div class="card-body">
          <h5><i class="fas fa-users"></i> Total Users</h5>
          <h2><?php echo $total_users; ?></h2>
          <span class="small">Total registered users</span>
        </div>
      </div>
    </div>
    
    <div class="col-12 col-sm-6 col-xl-3">
      <div style="background-color: #2eca6a !important;" class="card stats-card bg-dark text-white">
        <div class="card-body">
          <h5><i class="fas fa-calendar-check"></i> Total Reservations</h5>
          <h2><?php echo $total_reservations; ?></h2>
          <span class="small">Total reservations made</span>
        </div>
      </div>
    </div>
  </div>
</div>


           <!-- Recent Users Table -->
           <div class="row mt-4">
             <div class="col-12">
               <div class="card shadow-sm">
                 <div class="card-header">
                   <h5 class="mb-0">Recent Users</h5>
                 </div>
                 <div class="card-body">
                   <table class="table table-hover">
                     <thead>
                       <tr>
                         <th>User ID</th>
                         <th>First Name</th>
                         <th>Last Name</th>
                         <th>Email</th>
                         <th>Phone</th>
                       </tr>
                     </thead>
                     <tbody>
                       <?php
                       $query = "SELECT user_id, user_name, user_lastName, user_email, user_phone,urole FROM users WHERE urole!='admin' ORDER BY user_id DESC";
                       $result = mysqli_query($conn, $query);
                       while ($row = mysqli_fetch_assoc($result)) {
                         echo "<tr>";
                         echo "<td>" . htmlspecialchars($row['user_id']) . "</td>";
                         echo "<td>" . htmlspecialchars($row['user_name']) . "</td>";
                         echo "<td>" . htmlspecialchars($row['user_lastName']) . "</td>";
                         echo "<td>" . htmlspecialchars($row['user_email']) . "</td>";
                         echo "<td>" . htmlspecialchars($row['user_phone']) . "</td>";
                         echo "<td>
                           <a href='modify_user.php?user_id=".$row['user_id']."' class='btn btn-primary btn-sm'>Modify</a>
                           <a href='delete_user.php?user_id=".$row['user_id']."' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                         </td>";
                         echo "</tr>";
                       }
                       ?>
                     </tbody>
                   </table>
                 </div>
               </div>
             </div>
           </div>

           <!-- Recent Reservations Table -->
           <div class="row mt-4">
             <div class="col-12">
               <div class="card shadow-sm">
                 <div class="card-header">
                   <h5 class="mb-0">Recent Reservations</h5>
                 </div>
                 <div class="card-body">
                   <table class="table table-hover">
                     <thead>
                       <tr>
                         <th>Reservation ID</th>
                         <th>Reservation Date</th>
                         <th>House ID</th>
                         <th>User ID</th>
                       </tr>
                     </thead>
                     <tbody>
                       <?php
                       $query = "SELECT reservation_id, reservation_date, house_id, user_id FROM reservations ORDER BY reservation_date DESC";
                       $result = mysqli_query($conn, $query);
                       echo "<tr>" ;
                       echo "<td>" ;
                       echo "<td> 
                                <a href='delete_all_reservations.php' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure?\")'>Cancel All</a></td>";
                       while ($row2 = mysqli_fetch_assoc($result)) {
                         echo "<tr>";
                         echo "<td>" . htmlspecialchars($row2['reservation_id']) . "</td>";
                         echo "<td>" . htmlspecialchars($row2['reservation_date']) . "</td>";
                         echo "<td>" . htmlspecialchars($row2['house_id']) . "</td>";
                         echo "<td>" . htmlspecialchars($row2['user_id']) . "</td>";
                         echo "<td>
                           <a href='modify_reservation.php?reservation_id=" . $row2['reservation_id'] . "' class='btn btn-primary btn-sm'>Modify</a>
                           <a href='delete_reservation.php?reservation_id=" . $row2['reservation_id'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                         </td>";
                         echo "</tr>";
                       }
                       ?>
                     </tbody>
                   </table>
                 </div>
               </div>
             </div>
           </div>
         </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
