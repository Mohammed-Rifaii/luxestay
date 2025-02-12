<?php
include 'db_connect.php';
session_start();

// Redirect if user is not admin
if ($_SESSION['urole'] != "admin") {
    header("Location: /luxestay/index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $guest_house_id = $_POST['guest_house_id'];
    $guest_house_name = $_POST['guest_house_name'];
    $area = $_POST['area'];
    $beds = $_POST['beds'];
    $baths = $_POST['baths'];
    $garages = $_POST['garages'];
    $cost = $_POST['cost'];
    $guest_house_des = $_POST['guest_house_des'];
    $guest_house_about = $_POST['guest_house_about'];
    $location_id = $_POST['location_id'];
    $house_type = $_POST['house_type'];

    // Prepare the SQL query
    $query = "UPDATE guest_houses SET
                guest_house_name = ?, 
                area = ?, 
                beds = ?, 
                baths = ?, 
                garages = ?, 
                cost = ?, 
                guest_house_des = ?, 
                guest_house_about = ?, 
                location_id = ?, 
                house_type = ? 
              WHERE guest_house_id = ?";

    // Prepare and bind parameters
    $stmt = $conn->prepare($query);
    if ($stmt === false) {
        die("Prepare failed: " . htmlspecialchars($conn->error));
    }

    // Bind parameters
    $stmt->bind_param(
        "siiiiissiii", // Data types: s = string, i = integer
        $guest_house_name, 
        $area, 
        $beds, 
        $baths, 
        $garages, 
        $cost, 
        $guest_house_des, 
        $guest_house_about, 
        $location_id, 
        $house_type, 
        $guest_house_id
    );

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: properties-dashboard.php");
        exit();
    } else {
        echo "Error updating record: " . htmlspecialchars($stmt->error);
    }

    // Close the statement
    $stmt->close();
}
?>