<?php
     $db_hostname="127.0.0.1";
     $db_username="root";
     $db_password="";
     $db_name="pg_life";
   
     $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
     if(!$conn){
       echo "connecetion error:" .mysqli_connect_error();
       exit;
     } 

if (mysqli_connect_errno()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}
