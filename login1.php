<?php
// Database connection parameters
$conn = mysqli_connect("localhost", "root", "", "tourism_project");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$Email = mysqli_real_escape_string($conn, $_POST['username']);
$Passwd = mysqli_real_escape_string($conn, $_POST['passwod']);

// Verify for admin
if ($Email == "bonheurrukwaya@gmail.com" && $Passwd == "Urwanda") {
    header("location: dashboard/indexdash.html");
    exit;
}

// User login
$sql = "SELECT * FROM signup WHERE email = '$Email' AND passwd = '$Passwd'";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) > 0) {
    session_start(); 
    $_SESSION['email'] = $Email; 
    header("location: ./dashboard/userdash.html");
    exit; 
} else {
    echo '<script>alert("Invalid Email or password");</script>';
    header("location: signup.html");
}

mysqli_close($conn);
?>