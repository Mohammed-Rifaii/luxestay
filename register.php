
<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- MDBootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <?php include './assets/nav-footer/navbar.html';?>
</head>
<body class="bg-light">
<div class="container mb-10 mt-2">
        <div class="card shadow col-md-6 mx-auto">
            <div class="card-body">
                <h3 class="text-center mb-3">Register</h3>
                <form method="POST">
                    <div class="mb-2">
                        <label class="form-label">First Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="lastName" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Phone Number</label>
                        <input type="number" name="phone" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" style="background-color:#2eca6a;" class="btn btn-primary w-100">Register</button>
                </form>
            </div>
        </div>
    </div>

    <?php

include("db_connect.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if required keys exist in $_POST
    if (isset($_POST["name"]) && isset($_POST["lastName"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["password"])) {
        
        $name = $_POST["name"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $password = $_POST["password"];

        // Checking if the user exists
        $check = "SELECT user_email FROM users WHERE user_email = '$email'";
        $userExist = mysqli_query($conn, $check);
        if (mysqli_num_rows($userExist) == 0) {
            // Insert new user if not found
            $query = "INSERT INTO users(user_name, user_lastName, user_email, user_phone, user_password) 
                      VALUES('$name', '$lastName', '$email', '$phone', '$password')";
            $result = mysqli_query($conn, $query);
            if ($result) {
                echo "<p class='text-center mb-20' style='font-size: large;'>Data Inserted</p>";
                
                header("Location: login.php");
                exit();
            } else {
                echo "<p class='text-center mb-20' style='font-size: large;'>ERROR: ". mysqli_error($conn)."</p>";
            }
        } else {
            echo "<p class='text-center mb-20' style='font-size: large;'>User already exists</p>";
        }

        mysqli_close($conn);
    } else {
        echo "<p class='text-center mb-20' style='font-size: large;'>All fields are required!</p>";
    }
}
?>

<?php
 include './assets/nav-footer/footer.html';
 ?>
</body>
</html>