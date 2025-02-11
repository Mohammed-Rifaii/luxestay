<?php

    include 'db_connect.php';
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
    input{
      border-color:#2eca6a;
      border-radius:15px;
      background-color:#e0e0e0;
    }
    textarea{
      border-color:#2eca6a;
      border-radius:10px;
      background-color:#e0e0e0;



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
      <div class="col-md-10" style="margin-left:350px">
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
        
         $property_query = "SELECT COUNT(*)  FROM guest_houses";   
         $property_result = mysqli_query($conn, $property_query);
         $total_properties = ($property_result && mysqli_num_rows($property_result) > 0) ? mysqli_fetch_assoc($property_result)["COUNT(*)"] : 0;
         ?>

<div class="container-fluid">
  <div class="row g-4 mb-4">
    <div class="col-12 col-sm-6 col-xl-3">
      <div style="background-color: #2eca6a !important;" class="card stats-card bg-dark text-white">
        <div class="card-body">
          <h5><i class="fas fa-users"></i> Total Properties</h5>
          <h2><?php echo $total_properties; ?></h2>
          <span class="small">Total registered properties</span>
        </div>
      </div>
    </div>
    


           <!-- Recent Users Table -->
           <div class="row mt-4">
             <div class="col-12">
               <div class="card shadow-sm">
                 <div class="card-header">
                    <button class="mb-0 d-inline" style="border:none">
                        <h5 class="mb-0 d-inline">Registered Properties</h5></button>
                    
                      <button class="mb-0 d-inline" onclick="addProperty();"> 
                        <h5 class="mb-0 d-inline">Insert Properties</h5>
  </button>
                 </div>
                 
                 <div class="card-body">
                   <table class="table table-hover">
                     <thead>
                       <tr>
                         <th>ID</th>
                         <th>Name</th>
                         <th>Area</th>
                         <th>Beds</th>
                         <th>Baths</th>
                         <th>Garages</th>
                         <th>Cost</th>
                        <th>House About</th>
                        <th>House Desc</th>
                        <th>Location ID</th>
                        <th>House Type</th>

                       </tr>
                     </thead>
                     <tbody id="propertyTableBody">
                       <?php    
                       $query = "SELECT guest_house_id, guest_house_name, area, beds, baths,garages,cost,guest_house_des,guest_house_about,
                       location_id,house_type FROM guest_houses ORDER BY guest_house_id DESC";
                       $result = mysqli_query($conn, $query);
                       while ($row = mysqli_fetch_assoc($result)) {
                         echo `<tr style="vertical-align: middle;">`;
                         echo '<form action="modify-property.php" method="POST">';
                                    echo '<td style="vertical-align: middle;"> <input " style="width:50px; vertical-align: middle;
                                           text-align:center;" value="' . htmlspecialchars($row['guest_house_id']) . '" selectable="true"> </td>';

                                      echo '<td style="vertical-align: middle;"> <input style="width:150px; text-align:center; vertical-align:middle" 
                                          value="' . htmlspecialchars($row['guest_house_name']) . '" selectable="true"> </td>';
                                          
                                      echo '<td style="vertical-align: middle;"> <input style="width:50px; text-align:center"
                                          name="area" value="' . htmlspecialchars($row['area']) . '" selectable="true"> </td>';
                                          
                                      echo '<td style="vertical-align: middle;"> <input style="width:50px;text-align:center"
                                          name="beds" value="' . htmlspecialchars($row['beds']) . '" selectable="true"> </td>';
                                          
                                      echo '<td style="vertical-align: middle;"> <input style="width:50px;text-align:center"
                                          name="baths" value="' . htmlspecialchars($row['baths']) . '" selectable="true"> </td>';

                                      echo '<td style="vertical-align: middle;"> <input style="width:50px;text-align:center" 
                                          name="garages" value="' . htmlspecialchars($row['garages']) . '" selectable="true"> </td>';

                                      echo '<td style="vertical-align: middle;"> <input style="width:50px;text-align:center"
                                          name="cost" value="' . htmlspecialchars($row['cost']) . '" selectable="true"> </td>';
                                          
                                      echo '<td style="vertical-align: middle;"> 
                                      <textarea style="width:300px; height:150px;text-align:center" name="guest_house_des"> '
                                      . htmlspecialchars($row['guest_house_des']) . '</textarea> </td>';
                                      echo '<td style="vertical-align: middle;"> <textarea style="width:300px; height:150px;text-align:center" 
                                          name="guest_house_about">'.htmlspecialchars($row['guest_house_about']) . '</textarea> </td>';
                                          
                                      echo '<td style="vertical-align: middle;"> <input style="width:50px;text-align:center" name="location_id" 
                                            value="' . htmlspecialchars($row['location_id']) . '" selectable="true"> </td>';
                                            
                                      echo '<td style="vertical-align: middle;"> <input style="width:50px;text-align:center" name="house_type" 
                                            value="' . htmlspecialchars($row['house_type']) . '" selectable="true"> </td>';

                                     
                          echo "<td style='vertical-align: middle;'>
                            <button type='submit' class='btn btn-success btn-sm d-block mb-2'>Modify</button>";
                         echo '<a href="delete-property.php?guest_house_id=' . $row["guest_house_id"] . '" class="btn btn-danger btn-sm d-block" onclick="return confirm(\'Are you sure?\')">Delete</a>';

                             echo '</form>';
                
                         echo "</tr>";
                        }
                       ?>
                     </tbody>
                   </table>
                 </div>
               </div>
             </div>
           </div>
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
<script>
        <script>
    function addProperty() {
        console.log("addProperty() called"); // Debugging

        // Create a new row
        let newRow = document.createElement("tr");
        newRow.style.verticalAlign = "middle";

        // Add input fields for each column
        newRow.innerHTML = `
            <td><input style="width:50px; text-align:center;" name="guest_house_id" placeholder="ID"></td>
            <td><input style="width:150px; text-align:center;" name="guest_house_name" placeholder="Name"></td>
            <td><input style="width:50px; text-align:center;" name="area" placeholder="Area"></td>
            <td><input style="width:50px; text-align:center;" name="beds" placeholder="Beds"></td>
            <td><input style="width:50px; text-align:center;" name="baths" placeholder="Baths"></td>
            <td><input style="width:50px; text-align:center;" name="garages" placeholder="Garages"></td>
            <td><input style="width:50px; text-align:center;" name="cost" placeholder="Cost"></td>
            <td><textarea style="width:300px; height:150px; text-align:center;" name="guest_house_des" placeholder="Description"></textarea></td>
            <td><textarea style="width:300px; height:150px; text-align:center;" name="guest_house_about" placeholder="About"></textarea></td>
            <td><input style="width:50px; text-align:center;" name="location_id" placeholder="Location ID"></td>
            <td><input style="width:50px; text-align:center;" name="house_type" placeholder="House Type"></td>
            <td>
                <button type="submit" class="btn btn-success btn-sm d-block mb-2">Save</button>
                <button class="btn btn-danger btn-sm d-block" onclick="removeProperty(this)">Remove</button>
            </td>
        `;

        // Insert the new row at the top of the table
        let tableBody = document.getElementById("propertyTableBody");
        tableBody.insertBefore(newRow, tableBody.firstChild);

        console.log("New row added"); // Debugging
    }

    function removeProperty(button) {
        console.log("removeProperty() called"); // Debugging

        // Remove the row when the "Remove" button is clicked
        let row = button.closest("tr");
        row.remove();

        console.log("Row removed"); // Debugging
    }
</script>
</html>


?>