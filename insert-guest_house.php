<?php
    require 'db-connect.php';
    session_start();
    if($_SESSION['urole']!="admin"){
        header("Location:index.php");
    }


    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $name=$_POST['new_guest_house_name'];
        $location=$_POST['new_location_id'];
        $area=$_POST['new_area'];
        $baths=$_POST['new_baths'];
        $garages=$_POST['new_garages'];
        $cost=$_POST['new_cost'];
        $about=$_POST['new_guest_house_about'];
        $desc=$_POST['new_guest_house_des'];
        $type=$_POST['new_house_type'];
        
        $query="INSERT INTO guest_houses guest_house_id,guest_house_name,area,beds,baths,garages,cost,
        guest_house_desc, guest_house_about,location_id,house_type VALUES ('',$name,$location,$area,$beds,$baths,$garages,
        $cost,$desc,$about,$location,$type)";

        $result=mysqli_query($conn,$query);
    }
            mysqli_close($conn);
            echo "<script>alert('added property successfulyl!'); window.location.href = '/luxestay/properties-dashboard.php';</script>";  exit();
?>