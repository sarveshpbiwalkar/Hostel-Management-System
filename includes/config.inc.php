<?php
session_start();

$servername = "localhost"; // Change this to your MySQL server hostname
$dBUsername = "root";
$dBPassword = ""; // Change this to your MySQL database password
$dBName = "hostel-management-system";

// Create connection
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
