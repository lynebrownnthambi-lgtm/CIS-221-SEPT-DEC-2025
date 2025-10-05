<?php
$servername = "localhost";
$username = "root";   // default XAMPP username
$password = "";       // leave empty unless you set one
$dbname = "fashion_store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
