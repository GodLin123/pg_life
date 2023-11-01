<?php
session_start();
require("includes/database_connect.php");

$email = $_POST['email'];
$password = $_POST['password'];
$password=sha1($password);

$sql="select *from users WHERE email='$email' AND password='$password'";

  $result = mysqli_query($conn, $sql);
  if (!$result) {
      echo "something went wrong!";
      exit;
  }
  $row_count= mysqli_num_rows($resut);
  if($row_count==0){
    echo "login failed! invald email or password";
    exit;
  }


  $row = mysqli_fetch_assoc($result);
  if ($row) {
      echo "Hello " . $row['full_name'] . "<br/>";
    
      }
    else{
        echo "Login Failed<br/>";
    }

mysqli_close($conn);

  ?>