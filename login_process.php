<?php
session_start();
include "db.php";

// Make sure form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = trim($_POST['username']); // get from form
    $password = trim($_POST['password']);

    // Use prepared statements for security
    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            // Set session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            // Redirect to index
            header("Location: index.php");
            exit();
        } else {
            echo "Incorrect password!";
        }

    } else {
        echo "No account found with that username!";
    }

} else {
    echo "Invalid request!";
}
?>
