<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "new";


//Conneting to db
$conn = mysqli_connect($servername, $username, $password, $db);
if(!$conn)
{
    die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
}
?>