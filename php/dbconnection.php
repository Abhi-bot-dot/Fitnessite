<?php

// Variables that get the db credentials
$ServerName = "localhost";
$Username = "root";
$Password = "Stam!!ina00";

// Create connection
$Connection = new mysqli($ServerName, $Username, $Password);

// Check connection
if ($Connection->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>