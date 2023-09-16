<?php
// Start a session (if not already started)
session_start();

// Simulate a simple authentication system
$valid_username = 'user';
$valid_password = 'password';

// Get user input
$input_username = $_POST['username'];
$input_password = $_POST['password'];

// Verify credentials
if ($input_username === $valid_username && $input_password === $valid_password) {
    $_SESSION['username'] = $input_username;
    header('Location: welcome.php'); // Redirect to a welcome page on successful login
    exit();
} else {
    echo "Invalid username or password. <a href='login.html'>Try again</a>";
}
?>
