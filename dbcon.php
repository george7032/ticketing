<?php
// Database configuration
$host = "localhost"; // Hostname
$username = "root"; // MySQL username
$password = ""; // Empty password
$database = "ticketing"; // Database name

// Create connection
$con = new mysqli($host, $username, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} else {
    echo "Connected successfully";
}
?>
