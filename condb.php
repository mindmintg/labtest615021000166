<?php
// Create connection
$conn = new mysqli("localhost", "root", "","major3");

// Check connection
if ($conn->connect_error) {
  echo("Connection failed: " . $conn->connect_error);
}
else{
    //echo ("Connected successfully");
}
?>