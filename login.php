<?php
include "db.php";
include "encrypt.php";

$username = $_POST['username'];
$password = encryptData($_POST['password']);

$stmt = $conn->prepare(
    "SELECT capability_code FROM users WHERE username = ? AND password = ?"
);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Access granted – capability verified";
} else {
    echo "Access denied";
}
?>
