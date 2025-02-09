<?php
$user_id=$_SESSION['user_id'];
$house_id=$_SESSION['guest_house_id'];
require 'db_connect.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $days=explode(',',$_POST['selected_dates']);// we transform the string into an array
  foreach($days as $day){
        $sql="INSERT INTO reservations(reservation_date,house_id,user_id) VALUES('$day','$house_id','$user_id')";
  
          mysqli_query($conn,$sql);
  }
  

  mysqli_close($conn);
  header("Location:/luxestay/property-single.php");//this is solution to entering same values on refresh(idk why it happened)
  exit();
}
?>