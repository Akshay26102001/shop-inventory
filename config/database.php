<?php
$host = "localhost";  // Change this if using AWS RDS
$username = "admin";
$password = "Akshay@123";
$database = "shop_inventory";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
