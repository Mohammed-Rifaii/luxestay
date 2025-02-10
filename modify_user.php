<?php
$conn = mysqli_connect("localhost", "root", "", "project_guesthouse");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $query = "SELECT user_id, user_name, user_email FROM users WHERE user_id = '$user_id'";
    $result = mysqli_query($conn, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
    } else {
        $user = null; // Handle the case when user is not found
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['user_id'], $_POST['user_name'], $_POST['user_email'])) {
        $user_id = $_POST['user_id'];
        $username = $_POST['user_name'];
        $email = $_POST['user_email'];

        $update_query = "UPDATE users SET user_name='$username', user_email='$email' WHERE user_id='$user_id'";
        if (mysqli_query($conn, $update_query)) {
            echo "User updated successfully!";
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Error updating user: " . mysqli_error($conn);
        }
    }
}
?>

<h1 style="margin: 20pt;">Updating User Info</h1>

<?php if (!empty($user)): ?>
<form style="margin: 50pt;" method="POST">
  <input type="hidden" name="user_id" value="<?php echo $user['user_id']; ?>">
  <label>Username: </label>
  <input style="margin-bottom:5pt" type="text" name="user_name" value="<?php echo $user['user_name']; ?>" required><br>
  <label>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
  <input style="margin-bottom:5pt" type="email" name="user_email" value="<?php echo $user['user_email']; ?>" required><br>
  <button style="margin-left: 150px;" type="submit">Update User</button>
</form>
<?php else: ?>
<p style="margin: 50pt; color: red;">User not found.</p>
<?php endif; ?>
