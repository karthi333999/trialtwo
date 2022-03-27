<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn) {
    echo "Connection success ssssss";
  }
  
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>