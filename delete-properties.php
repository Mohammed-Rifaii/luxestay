<?php
       include 'db_connect.php';
       $query="DELETE FROM guest_houses";
       if (mysqli_query($conn, $query)) {
           echo "Reservations deleted successfully!";
           header("Location: properties-dashboard.php");
           exit(2);
       } else {
           echo "Error deleting reservation: " . mysqli_error($conn);
       }
?>