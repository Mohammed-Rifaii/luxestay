<?php 


    $db_server="localhost";
    $user="root";
    $pass="";
    $db_name="project_guesthouse";
    try{$conn=mysqli_connect($db_server,$user,$pass,$db_name);
        ;}
    catch(mysqli_sql_exception){
        echo "Error Establishing a DataBase Connection";
        
    }

    
?>