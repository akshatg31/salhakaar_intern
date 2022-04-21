<?php
$servername = "localhost";
$username = "root"; //default Username
$password = ""; // default Password
$databasename = "salahkaar"; //database name

//Creating Connection
$conn = new mysqli($servername, $username, $password, $databasename);

//Checking it
if($conn->connect_error)
{
    die("Connection Failed...\n " .$conn->connect_error);
}
?>
