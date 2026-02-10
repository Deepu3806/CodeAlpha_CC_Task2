<?php
include "db.php";
include "encrypt.php";

$username = $_POST['username'];
$password = encryptData($_POST['password']);

// generate capability code
$capability = bin2hex(random_bytes(16));

// SQL Injection–safe query
$stmt = $conn->prepare(
    "INSERT INTO users (username, password, capability_code) VALUES (?, ?, ?)"
);
$stmt->bind_param("sss", $username, $password, $capability);

if ($stmt->execute()) {
    echo "User registered securely";
} else {
    echo "Registration failed";
}
?>
