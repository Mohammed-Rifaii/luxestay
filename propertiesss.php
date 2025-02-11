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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password,"project_guesthouse");


$sql = "SELECT start_date FROM reservations";
$result= mysqli_query($conn, $sql);


               
               if (mysqli_num_rows($result) > 0) { 
                 while($row = mysqli_fetch_assoc($result)) { 
                   echo $row["start_date"]. " ". "<br>"; 
                 } 
               } else {echo "0 results";}       
                        mysqli_close($conn);    
                            
                            ?>
                            /*<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password,"project_guesthouse");
// Get form data
$checkin_date = $_POST['checkin_date'];
$checkout_date = $_POST['checkout_date'];
$total_nights = $_POST['total_nights'];
$total_price = $_POST['total_price'];
// Insert into database
$sql = "INSERT INTO reservations (start_date,end_date,total_price	,house_id) 
VALUES ('$checkin_date', '$checkout_date',$total_price,1)";


/* if (mysqli_query($conn, $sql)) { 
echo "Your booking has been successfully made"; 
} else { 
echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
} */

$sql = "SELECT start_date FROM reservations";
$result= mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) { 
  while($row = mysqli_fetch_assoc($result)) { 
    echo $row["start_date"]. " ". "<br>"; 
  } 
} else {echo "0 results";} 
mysqli_close($conn);
?>
*/