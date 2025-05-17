<?php
session_start();
include "db.php";

$username = $_POST['username'];
$password = $_POST['password'];

// Hindari SQL Injection
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// Cek user
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
    exit();
} else {
    echo "Username atau password salah.";
}


$conn->close();
?>
