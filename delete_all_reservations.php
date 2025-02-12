<?php

    if($_SESSION['urole']!="admin")
    header("Location:index.php");

     include 'db_connect.php';
    
     $query="DELETE FROM reservations";
    if (mysqli_query($conn, $query)) {
        echo "Reservation deleted successfully!";
        header("Location: dashboard.php");
        exit(2);
    } else {
        echo "Error deleting reservation: " . mysqli_error($conn);
    }
?>