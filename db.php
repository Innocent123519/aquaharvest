<?php
$servername = "localhost";
$username = "root"; // or your MySQL username
$password = "";     // or your MySQL password
$dbname = "aquaharvest_db"; // your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
