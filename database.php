<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

//Create database
$sql="CREATE DATABASE institute";

$result= mysqli_query($conn,$sql);

if($result){
    echo "<br> Database created sucessfully";
}
else{
    die("Can't create database" . mysqli_error());
}
?> 
</body>
</html>