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
  echo "<script>alert('Reservation successful!'); window.location.href = '/luxestay/property-single.php?guest_house_id=$house_id';</script>";  exit();

}
?>