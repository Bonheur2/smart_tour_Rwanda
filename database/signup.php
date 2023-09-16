<?php
// Start a session (if not already started)
session_start();

// Retrieve form data
$username = $_POST['username'];
$id_or_passport = $_POST['id_or_passport'];
$phonenumber = $_POST['phonenumber'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$birthdate = $_POST['birthdate'];
$position = $_POST['position'];
$company = $_POST['company'];

// Basic password confirmation check
if ($password !== $confirm_password) {
    echo "Passwords do not match. <a href='signup.html'>Try again</a>";
    exit();
}

// Store data in session (for demonstration purposes)
$_SESSION['username'] = $username;
$_SESSION['id_or_passport'] = $id_or_passport;
$_SESSION['phonenumber'] = $phonenumber;
$_SESSION['birthdate'] = $birthdate;
$_SESSION['position'] = $position;
$_SESSION['company'] = $company;

header('Location: profile.php'); // Redirect to a profile page
exit();
?>
