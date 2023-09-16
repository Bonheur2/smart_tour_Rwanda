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
    $Username = $_POST["username"];
    $Email = $_POST["email"];
    $Comment = $_POST["comment"];   
    

        $sql_query = "INSERT INTO  comments(username, email, comments)
        VALUES ('$Username', '$Email', '$Comment')";


        if(mysqli_query($conn, $sql_query)){
            header('location: index.html');
            // echo "Comments Send Successful";
        }
    else{
       echo "Error:" . $sql . "" . mysql_error($conn);
    }

    mysqli_close($conn);
}
?>
