<?php
$conn = mysqli_connect("localhost", "root", "", "project_guesthouse");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['reservation_id'])) {
    $reservation_id = $_GET['reservation_id'];
    $delete_query = "DELETE FROM reservations WHERE reservation_id = $reservation_id";

    if (mysqli_query($conn, $delete_query)) {
        echo "Reservation deleted successfully!";
        header("Location: dashboard.php");
        exit(2);
    } else {
        echo "Error deleting reservation: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
