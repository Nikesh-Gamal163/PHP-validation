<?php
   $servername="localhost";
    $username="root";
    $passwordS="";

    //create connection
    $conn=mysqli_connect($servername,$username,$passwordS);
   
    if(!$conn){
        die("Connection failed");
    }
    else{
        echo "Connected successfully";
    }


    //create database
    $sql="CREATE DATABASE IF NOT EXISTS User_Management";
    $result=mysqli_query($conn,$sql);

    if(!$result){
        die("Database creation failed");
    }
    else{
        echo "<br>Database creation successful";
    }
?>