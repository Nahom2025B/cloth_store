<?php
include "db.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$access_code = $_POST['access_code'];


if ($password !== $confirm_password) {
    die("Passwords do not match!");
}


$checkCode = $conn->query("SELECT * FROM access_code WHERE code='$access_code'");

if ($checkCode->num_rows == 0) {
    die("Invalid Access Code!");
}


$hashed_password = password_hash($password, PASSWORD_DEFAULT);


$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

if ($conn->query($sql)) {
    echo "Account Created Successfully! <a href='login.html'>Login Here</a>";
} else {
    echo "Error: " . $conn->error;
}
?>
