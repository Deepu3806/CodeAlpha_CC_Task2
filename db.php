<?php
$conn = new mysqli("localhost", "root", "", "secure_cloud_db");

if ($conn->connect_error) {
    die("Database connection failed");
}
?>
