<?php
$host = "localhost";
$user = "root";     // default in XAMPP
$pass = "";         // default in XAMPP
$dbname = "westside";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
