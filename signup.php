<?php

$server_name = "localhost";
$username = "root";
$password = "";
$databasename = "tourism_project";

$conn =  mysqli_connect($server_name,$username,$password,$databasename);

if(!$conn){
    die("connection Failed :" . mysqli_connect_error());
}

if(isset($_POST['submit']))
{
    $Username = $_POST["user_name"];
    $ID_PASSPORT = $_POST["Pass_port"];
    $Email = $_POST["email"];
    $Telephone = $_POST["phone"];
    $Password = $_POST["passwd"];
    $Birhdate = $_POST["birthdate"];
    $Position = $_POST["position"];
    $Campany = $_POST["campany"];
    $gender = $_POST["gender"];
    

        $sql_query = "INSERT INTO  signup(username, Passport, email, phone, passwd, birthdate, position, campany, Gender)
        VALUES ('$Username', '$ID_PASSPORT', '$Email', '$Telephone','$Password', '$Birhdate', '$Position', '$Campany', '$gender' )";


        if(mysqli_query($conn, $sql_query)){
            header('location: login.html');
        }
    else{
       echo "Error:" . $sql . "" . mysql_error($conn);
    }

    mysqli_close($conn);
}
?>
