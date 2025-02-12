<?php
        include 'db_connect.php';
        session_start();
        if($_SESSION['urole']!="admin")
        header("Location:index.php");

       $house_id=$_GET['guest_house_id'];
       echo $house_id;
       $query="DELETE FROM guest_houses WHERE guest_house_id=$house_id";
       if (mysqli_query($conn, $query)) {
           echo "[property deleted successfully!";
           header("Location: properties-dashboard.php");
           exit(2);
       } else {
           echo "Error deleting property: " . mysqli_error($conn);
       }
?>