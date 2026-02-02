<?php
$host = "shortline.proxy.rlwy.net";
$port = "32927";
$user = "root";
$pass = "YOUR_REAL_PASSWORD";
$db   = "railway";

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
