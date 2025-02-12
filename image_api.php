<?php
   include ('db_connect.php');
   session_start();
   if($_SESSION['urole']!="admin"){
       header("Location:index.php");
   }


if (isset($_FILES["image_path"])) {
    $target_dir = "assets/img/property-slide/";
    
    // Create the directory if it doesn't exist
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    
    // Define target file path
    $target_file = $target_dir . basename($_FILES["image_path"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, the file already exists.";
        exit;
    }

    // Check file size
    if ($_FILES["image_path"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        exit;
    }

    // Check file type (allow JPG, PNG, JPEG)
    if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
        echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
        exit;
    }

    // Attempt to move the uploaded file
    if (move_uploaded_file($_FILES["image_path"]["tmp_name"], $target_file)) {
        
            if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                $name=$_POST['new_guest_house_name'];
                $location=$_POST['new_location_id'];
                $beds=$_POST['new_beds'];
                $area=$_POST['new_area'];
                $baths=$_POST['new_baths'];
                $garages=$_POST['new_garages'];
                $cost=$_POST['new_cost'];
                $about=$_POST['new_guest_house_about'];
                $desc=$_POST['new_guest_house_des'];
                $type=$_POST['new_house_type'];
                
                $query="INSERT INTO guest_houses (guest_house_id,guest_house_name,area,beds,baths,garages,cost,
                guest_house_des, guest_house_about,location_id,house_type) VALUES ('','$name','$area'
                ,'$beds','$baths','$garages',
                '$cost','$desc','$about','$location','$type')";

                $result=mysqli_query($conn,$query);
                $guest_house_id = mysqli_insert_id($conn);
                $query="INSERT INTO images (image_path,guest_house_id) VALUES ('$target_file','$guest_house_id')";
                mysqli_query($conn,$query);
            }
            mysqli_close($conn);
             echo "<script>alert('added property successfulyl!'); window.location.href = '/luxestay/properties-dashboard.php';</script>";  exit();

    } else {
        echo "Sorry, there was an error.";
    }
}
?>
