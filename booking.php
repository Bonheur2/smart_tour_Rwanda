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
    $ID_PASSPORT = $_POST["idnumber"];   
    $Nationalism = $_POST["nationalism"];
    $Telephone = $_POST["telephone"];
    $Check_in = $_POST["checkin"];
    $Check_Out = $_POST["checkout"];
    $Guest = $_POST["guests"];
    $Location = $_POST["placeType"];
    $Special_request = $_POST["specialRequests"];
    

        $sql_query = "INSERT INTO  booking(username, email, Passport, nationalism, telephone, check_in, check_out, guest, location, special_request)
        VALUES ('$Username', '$Email', '$ID_PASSPORT', '$Nationalism', '$Telephone','$Check_in', '$Check_Out', '$Guest', '$Location', '$Special_request')";


        if(mysqli_query($conn, $sql_query)){
            // header('location: login.html');
            echo "Booking Successful";
        }
    else{
       echo "Error:" . $sql . "" . mysql_error($conn);
    }

    mysqli_close($conn);
}
?>
