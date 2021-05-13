<?php
   $servername="localhost";
    $username="root";
    $passwordS="";
    $Dbname="User_Management";

    //create connection
    $conn=mysqli_connect($servername,$username,$passwordS,$Dbname);
   
    if(!$conn){
        die("Connection failed");
    }
    else{
        echo "Connected successfully for creating table";
    }


    //create database
    $sql="CREATE TABLE IF NOT EXISTS tbl_users(
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    gender VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    program VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    Phone_Number VARCHAR(30) NOT NULL
    )";
    $result=mysqli_query($conn,$sql);

    if(!$result){
        die("Table creation failed");
    }
    else{
        echo "<br>Table creation successful";
    }
?>