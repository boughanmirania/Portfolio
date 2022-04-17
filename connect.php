<?php
$servername = "mysql-portfolio-rania.alwaysdata.net";
$username = "246813_portfolio";
$password = "rania12345678";
$database = "portfolio-rania_2021";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
