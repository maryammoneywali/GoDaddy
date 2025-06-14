<?php
$servername = "localhost";
$username = "ubjoobbqjperx";
$password = "iggo1ujy5keg";
$dbname = "db7lk7thnpriuf";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
