<?php

$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$addressOne = $_POST['addrs1'];
$addressTwo = $_POST['addrs2'];
$city = $_POST['city']; 
$state = $_POST['states'];
$contry = $_POST['country'];
$zipCode = $_POST['zpcd'];


$date = new DateTime();
$result = $date->format('Y-m-d H:i:s');

$servername = "Localhost";
$username = "1106603";
$password = "bigwees52";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn, '1106603');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO Users (firstName,lastName,address1,adress2,city,state,zip,country,dateAdded) VALUES ('$firstname','$lastname','$addressOne','$addressTwo','$city','$state','$zipCode','$contry','$result')";



mysqli_close($conn);
include 'confirmation.php';
?>