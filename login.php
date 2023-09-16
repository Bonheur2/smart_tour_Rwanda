<?php
// session_start();
$conn = mysqli_connect("localhost", "root", "", "tourism_project");
// include "./connect.php";

$Username = mysqli_real_escape_string($conn, $_POST['usename']);
$Password = mysqli_real_escape_string($conn,$_POST['Passwod']);
if(EMPTY($Username) || EMPTY($Password))
{
    $_SESSION['message'] ="All FIelds Required";
    // header("Location: login.php");
    echo "urwanda rwiza";
}
else{
    $sql = "SELECT * FROM signup where username ='$Username' AND passwd='$Password'";
    $sql_run = mysqli_query($conn,$sql);
    $rows = mysqli_num_rows($sql_run);
    
    if($rows > 0){
        while($onerow = mysqli_fetch_assoc($sql_run)){
            $_SESSION['message'] ="login successful";
        // header("Location: index.html");
        echo "nice login successful";
     }
    }
    else{
        $_SESSION['message'] ="Please No Any Account Found!";
        // header("Location: login.html");
    }
 }
 ?>