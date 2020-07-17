<?php
$servername = "localhost";
$username = "root";
$password = "";
$nombrebd = "oscar";

// Create connection
$conn = new mysqli($servername, $username, $password, $nombrebd);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$conn->close();
?>