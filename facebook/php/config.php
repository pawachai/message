<?php
  $hostname = "localhost";
  $username = "bagandbo";
  $password = "514011120";
  $dbname = "bagandbo_bagandbo";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
