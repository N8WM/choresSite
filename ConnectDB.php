<?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
global $conn;
$conn = mysqli_connect('localhost:3306', 'root', 'root', 'MyChoresDB');
$_SESSION['conn'] = $conn;

// Check connection
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}