<?php
$conn = mysqli_connect("localhost", "root", "", "project_guesthouse");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['reservation_id'])) {
    $reservation_id = $_GET['reservation_id'];
    $query = "SELECT * FROM reservations WHERE reservation_id = $reservation_id";
    $result = mysqli_query($conn, $query);
    $reservation = mysqli_fetch_assoc($result);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reservation_id = $_POST['id'];
    $reservation_date = $_POST['reservation_date'];

    $update_query = "UPDATE reservations SET reservation_date='$reservation_date' WHERE reservation_id=$reservation_id";
    if (mysqli_query($conn, $update_query)) {
        echo "Reservation updated successfully!";
        header("Location: dashboard.php");
        exit(2);
    } else {
        echo "Error updating reservation: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
<h1 style="margin: 20pt;">Updating Reservation info</h1>
<form method="POST">
  <input type="hidden" name="id" value="<?php echo $reservation['reservation_id']; ?>">
  <label style="margin-left:70pt">Reservation Date:</label>
  <input type="date" style="margin-bottom:5pt" name="reservation_date" min="now()" value="<?php echo date('d-m-Y', strtotime($reservation_date)); ?>" required>
  <br>
  <input style="margin-left:145pt" value="Update Reservation" type="submit">
</form>
