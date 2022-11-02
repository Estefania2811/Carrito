<?php
$servername = "localhost";
$username = "root";
$password = "root";
$bdd = "bdd";

//create communication
$conn = mysqli_connect($servername,$username,$password,$bdd);

//check connection
/*
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
*/
?>