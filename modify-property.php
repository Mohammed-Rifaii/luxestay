<?php
      include 'db_connect.php';
      session_start();
      if($_SESSION['urole']!="admin")
        echo"asd" ;   
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $guest_house_id = $_POST['guest_house_id'];
        $guest_house_name = $_POST['guest_house_name'];
        $area = $_POST['area'];
        $beds = $_POST['beds'];
        $baths = $_POST['baths'];
        $garages = $_POST['garages'];
        $cost = $_POST['cost'];
        $guest_house_des = $_POST['guest_house_des'];
        $guest_house_about = $_POST['guest_house_about']  ;
        $location_id = $_POST['location_id'];
        $house_type = $_POST['house_type'];
    }
    $query="UPDATE guest_houses SET
    guest_house_name = '$guest_house_name', 
    area = '$area', 
    beds = '$beds', 
    baths = '$baths', 
    garages = '$garages', 
    cost = '$cost', 
    guest_house_des = '$guest_house_des', 
    guest_house_about = '$guest_house_about', 
    location_id = '$location_id', 
    house_type = '$house_type' 
  WHERE guest_house_id = '$guest_house_id'";

    if (mysqli_query($conn, $query)) {
    header("Location: properties-dashboard.php");
    exit();
    } else {
    echo "Error updating record: " . mysqli_error($conn);
}



?>
