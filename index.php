<?php

$server_name = "localhost";
$username = "root";
$password = "";
$databasename = "tourism_project";

$conn =  mysqli_connect($server_name,$username,$password,$databasename);

if(!$conn){
    die("connection Failed :" . mysqli_connect_error());
}

if(isset($_post['submit']))
{
    $username = $_POST["username"];
    $ID_PASSPORT = $_POST["Passport"];
    $Email = $_POST["email"];
    $Telephone = $_POST["telephone"];
    $Password = $_POST["passwd"];
    $Birhdate = $_POST["birthdate"];
    $Position = $_POST["position"];
    $gender = $_POST["gender"];
    //$languages = $_POST["languages"];

        $sql_query = "INSERT INTO signup(username, ID_PASSPORT, email, telephone, passwd, birthdate, position, gender)
        VALUES ('$username', '$ID_PASSPORT', '$Email', '$Telephone','$Password', '$Birhdate', '$Position', '$gender' )";


        if(mysqli_query($conn, $sql_query)){

        echo "successful";
        }
    else{
       echo "Error:" . $sql . "" . mysql_error($conn);
    }

    mysqli_close($conn);
}
?>