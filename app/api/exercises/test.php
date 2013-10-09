<?php
// Create connection
$con=mysqli_connect("localhost","ebenoitc_fitsor","fitsor","ebenoitc_fitsor");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>