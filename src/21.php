<?php
// Define variables
$user = "admin";
$password = "admin123";

// Connect to database
$servername = "localhost";
$dbname = "mathematics_project";  // your MySQL database name
$username = $user;
$password = $password;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
