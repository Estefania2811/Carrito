<?php
$servername = "localhost";
$username = "root";
$password = "root";
$bdd = "practica";

// Create connection
$conn = new mysqli($servername, $username, $password, $bdd);

// Check connection
if (!$conn) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>