<?php
$servername = "localhost";
$dBusername = "root";
$dbpassword = "";
$dBname = "lms19";

// Attempt to connect to the database
$conn = mysqli_connect($servername, $dBusername, $dbpassword, $dBname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
