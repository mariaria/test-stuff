<?php
include"Bouncer/mjuaji.php";
$database = "iot_dotts";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if (mysqli_connect_error()) {
  die("Database connection failed: " . mysqli_connect_error());
}
//echo 'Connected successfully';

// Create database
$mysqli = "CREATE DATABASE IF NOT EXISTS $database";
if ($conn->query($mysqli) === TRUE) {
  //echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if (mysqli_connect_error()) {
  die("Database connection failed: " . mysqli_connect_error());
}
//echo 'DB created and Connected successfully';

?>


