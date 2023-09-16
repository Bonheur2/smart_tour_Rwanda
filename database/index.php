<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$sql = "INSERT INTO comments (name, email, comment) VALUES ('$name', '$email', '$comment')";

if ($conn->query($sql) === TRUE) {
    echo "Comment inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
