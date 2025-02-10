<?php
$conn = mysqli_connect("localhost", "root", "", "project_guesthouse");
if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $delete_query = "DELETE FROM users WHERE user_id = $user_id";
    
    if (mysqli_query($conn, $delete_query)) {
        echo "User deleted successfully!";
        header("Location: dashboard.php");
        exit(2);
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
}

?>
