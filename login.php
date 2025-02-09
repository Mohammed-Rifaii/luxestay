<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <?php include './assets/nav-footer/navbar.html';?>
    <style>
        .button:hover{
            color: #2eca6a;
            
        }

        .green-bg{
            background-color: #2eca6a;
            
        }
        .green{
            color: #2eca6a;
        }
    </style>

</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow col-md-6 mx-auto">
        <div class="card-body">
            <h3 class="text-center mb-4">Login</h3>
            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn green-bg btn-primary w-100">Login</button>
            </form>
        </div>
    </div><br><br>
    <div class="text-center">
    <p style="font-size: large;">Not a member? <a href="register.php" class="green">Register</a></p>
    </div>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     include("db_connect.php");
   

    // Get the email and password from the POST request
    $email = $_POST["email"];
    $_SESSION['email']=$email;
    $password = $_POST["password"];

    // Checking if the user exists in the table users
    $check = "SELECT user_id FROM users WHERE user_email = '$email'";
    $userExist = mysqli_query($conn, $check);

      // Checking if the admin exists in the table users
    $check2= "SELECT admin_id FROM admins WHERE admin_email = '$email'";
    $adminExist=mysqli_query($conn,$check2);
    // If user exists
    if (mysqli_num_rows($userExist) != 0) {
        $getPassword = "SELECT user_password FROM users WHERE user_email = '$email'";
        $result = mysqli_query($conn, $getPassword);
        $row = mysqli_fetch_assoc($result);
        
        if ($password == $row['user_password']) {
            // Password is correct
            $row = mysqli_fetch_assoc($userExist);
           
            session_start();
            $_SESSION['user_id'] = $row['user_id'];// Store user ID in session
            header("Location: index.php"); // Redirect to dashboard
            exit();
        } else {
            echo "error";
        }
    } else {
        echo "error";
    }

 if (mysqli_num_rows($adminExist) != 0) {
        $getPassword = "SELECT admin_pass FROM admins WHERE admin_email = '$email'";
        $result = mysqli_query($conn, $getPassword);
        $row = mysqli_fetch_assoc($result);
        
        if ($password == $row['admin_pass']) {
            // Password is correct
            $row = mysqli_fetch_assoc($adminExist);
           
            session_start();
            $_SESSION['admin_id'] = $row['admin_id'];// Store user ID in session
            header("Location: index1.php"); // Redirect to dashboard
            exit();
        } else {
            echo "error";
        }
    } else {
        echo "error";
    }
    mysqli_close($conn);
}
?>

<?php 
include './assets/nav-footer/footer.html';
?>
</body>
</html>
