<?php
session_start();
$server = "localhost";
// $username = "stuser";
$username = "root";
// $password = "submittax@2019";
$password = "";
$database = "submittax";
// Create connection
$conn = new mysqli($server, $username, $password, $database);
// Check connection
mysqli_set_charset($conn,'utf8');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>