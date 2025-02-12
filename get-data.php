<?php
    session_start();
    include('db_connect.php');
    $uri=$_SERVER['REQUEST_URI'];// get the part in url after localhost
    $request_method=$_SERVER['REQUEST_METHOD'];
    $email=$_SESSION['email'];//get email through session
    $house_id =$_SESSION['guest_house_id'];
    $data=[];
    $data1=[];
    $data2=[];
    $role="admin";
    if($request_method=='GET'){
        if($uri=='/luxestay/get-data.php/users'){
        
            $query="SELECT user_id ,user_name FROM users WHERE user_email='$email'";
            $result=mysqli_query($conn,$query);
            
            if($result&&mysqli_num_rows($result)>0){//check if there are results and rows>0
                while($row=mysqli_fetch_assoc($result))
                    $data[]=$row;//while there are rows add them to the array
            }
        }

        else if ($uri=="/luxestay/get-data.php/stats"){
            $query="SELECT COUNT(*) FROM users";
            $result=mysqli_query($conn,$query);
            if($result && mysqli_num_rows($result)>0){
                while($rows=mysqli_fetch_assoc($result))
                    $data[]=$rows;
            }
    
        }
        else if ($uri=="/luxestay/get-data.php/get_guest_house"){
            $query="SELECT guest_house_id,guest_house_name, area,beds,baths,garages,cost, guest_house_des, guest_house_about,
             location_id FROM guest_houses WHERE guest_house_id=$house_id";
            $result=mysqli_query($conn,$query);
            if($result && mysqli_num_rows($result)>0){
                while($rows=mysqli_fetch_assoc($result))
                    $data[]=$rows;
            }
    
        }

        else if ($uri=="/luxestay/get-data.php/get_guest_house_properties"){
            $query="SELECT guest_houses.guest_house_id,guest_houses.guest_house_name, 
            guest_houses.area, guest_houses.beds, guest_houses.baths,guest_houses.garages, 
            guest_houses.cost, images.image_path AS guest_house_image FROM guest_houses
           JOIN images ON guest_houses.guest_house_id = images.guest_house_id";
            $result=mysqli_query($conn,$query);
            if($result && mysqli_num_rows($result)>0){
                while($rows=mysqli_fetch_assoc($result))
                    $data[]=$rows;
            }
    
        }


        else if($uri=='/luxestay/get-data.php/get_guest_house_location'){
            $query="SELECT loc.location_desc FROM locations loc JOIN guest_houses gh ON loc.location_id = gh.location_id WHERE gh.guest_house_id=$house_id";
            $result=mysqli_query($conn,$query);
            if($result&&mysqli_num_rows($result)>0){
                while($rows=mysqli_fetch_assoc($result))
                    $data[]=$rows;
            }
        }


    else if($uri=='/luxestay/get-data.php/get_house_type'){
        $query="SELECT ht.type_desc FROM house_types ht JOIN guest_houses gh ON ht.type_id = gh.house_type WHERE gh.guest_house_id=$house_id";
        $result=mysqli_query($conn,$query);
        if($result&&mysqli_num_rows($result)>0){
            while($rows=mysqli_fetch_assoc($result))
                $data[]=$rows;
        }
    }

    else if($uri=='/luxestay/get-data.php/get_house_images'){
        $query="SELECT image_path FROM images WHERE guest_house_id=$house_id";
        $result=mysqli_query($conn,$query);
        if($result && mysqli_num_rows($result)>0){
            while($rows=mysqli_fetch_assoc($result))
                $data[]=$rows;
            echo $rows;
        }
    }

   
    else if ($uri == '/luxestay/get-data.php/get_guest_house_index') {
        // Correct the table name in the query
        $query = "SELECT guest_houses.guest_house_id, guest_houses.guest_house_name, guest_houses.cost,
                    images.image_path,locations.location_desc
                  FROM guest_houses 
                  INNER JOIN locations ON guest_houses.location_id = locations.location_id
                  INNER JOIN images ON guest_houses.guest_house_id=images.guest_house_id";
        
        // Execute the query
        $result = mysqli_query($conn, $query);
        
        // Check if the query was successful and if there are rows returned
        if ($result && mysqli_num_rows($result) > 0) {
            while ($rows = mysqli_fetch_assoc($result)) {
                $data[] = $rows; // Append each row to the data array
            }
    }
}

else if($uri=='/luxestay/get-data.php/get-web-images'){
    $section='about';
    $query="SELECT image_path FROM website_images WHERE section='$section'";
    $result=mysqli_query($conn,$query);
    if($result&& mysqli_num_rows($result)>0){
        while($rows=mysqli_fetch_assoc($result)){
            $data[]=$rows;
        }
    }
}
    else if($uri=='/luxestay/get-data.php/get_guest_house_count'){
        $query="SELECT COUNT(*) FROM guest_houses";
        $result=mysqli_query($conn,$query);
        if($result && mysqli_num_rows($result)>0){
            while($rows=mysqli_fetch_assoc($result)){
                $data[]=$rows;
            }
        }
    }
    else if ($uri=='/luxestay/get-data.php/get_reservations'){
        $query="SELECT reservation_date FROM reservations WHERE house_id=$house_id";
        $result=mysqli_query($conn,$query);
        if($result&& mysqli_num_rows($result)>0){
            
            while($rows=mysqli_fetch_assoc($result)){
            $data[]=$rows;
            }
            
        }

    }

    

    
    mysqli_close($conn);
    echo json_encode($data);//encode data as jason file to send them out
}
?>