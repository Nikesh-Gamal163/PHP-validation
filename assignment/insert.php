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
        echo "Connected successfully for Inserting into table<br>";
    }

    //inserting to table
    $sql="INSERT INTO tbl_users(id,name,gender,email,program,password,Phone_Number)
                 VALUES('','$name','$gender','$email','$program','$password','$phone')";

    if(mysqli_query($conn,$sql)){
        echo "<br>Data Insertion Succesfull.<br>";
    }
    else{
        die("<br>Data Insertion failed");
    }
   
?>