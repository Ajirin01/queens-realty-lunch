<?php
$host = "localhost"; // Replace with your database host
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$database = "real_estate_db"; // Replace with your database name

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
