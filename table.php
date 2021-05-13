<?php 


// $name=$roll=$email=$phone=$active="";
// $nameErr=$rollErr=$emailErr=$phoneErr=$activeErr="";
    
// if($_SERVER["REQUEST_METHOD"] =="POST"){
 
//     $name=test_input($_POST["name"]);
//     $roll=test_input($_POST["roll"]);
//     $phone=test_input($_POST["Phone"]);
//     $email=test_input($_POST["email"]);
//         $nameErr=$rollErr=$phoneErr=$emailErr="";
        
//         $patname="/^[A-Za-z]+[\s][A-Za-z]+$/i";
//         $patroll="/^[0-9]+/";
//         $patemail="/^[A-Za-z]+@[a-z]{2,}.[a-z]{2,}$/";
//         $patphone="/^[0-9]{10}$/";

//     if(empty($name)){
//          $nameErr="Name is required";
//     }
//     else{ 
//         if(!preg_match($patname,$name)){
//             $name=$nameErr="Pattern for Name is not matched"; 
//         }
//     }

//     if(empty($roll)){
//         $rollErr="Roll is required";
//         }
//    else{ 
//         if(!preg_match($patroll,$roll)){
//             $roll=$rollErr="Pattern for Roll is not matched"; 
//         }
//    }
 
//    if(empty($email)){
//     $emailErr="Email is required";
// }
// else{ 
//         if(!preg_match($patemail,$email)){
//             $email=$emailErr="Pattern for Email is not matched"; 
//         }
// }
 
// if(empty($phone)){
//     $phoneErr="Phone is required";
// }
// else{ 
//         if(!preg_match($patphone,$phone)){
//             $phone=$phoneErr="Pattern for Roll is not matched"; 
//         }
// }


// if (empty($_POST["mySelect"])) {
//     $activeErr = "Gender is required";
//   } else {
//     $active = test_input($_POST["mySelect"]);
//   }

// }

// function test_input($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
//   }

?>

<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database="institute";

  $conn=mysqli_connect($servername ,$username ,$password ,$database);

  if(!$conn){
      die("Connection failed: " . mysqli_error());
  }
  else{
      echo "Connected sucessfully <br>";
  }

  //Create Table
  $sqlT="CREATE TABLE tbl_users(
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(30) NOT NULL,
      roll INT(5) NOT NULL,
      mobile_number INT(10) NOT NULL,
      email VARCHAR(25) NOT NULL,
      status VARCHAR(7) NOT NULL
  )";

//Check for the table
  if(mysqli_query($conn,$sqlT)){
      echo "Table created successfully<br>";
  }
  else {
     echo "Error";
  }


//   //Insert Data to the database
// //   $sqlI="INSERT INTO tbl_users (id, name, roll, mobile_number,email,status) VALUES(1,$name,$roll,$phone,$email,$active)";

// $sqlI="INSERT INTO tbl_users (id, Name, roll, mobile_number,email,status) VALUES(1,"Nikesh Gamal",191624,9816619864,"nikeshgamal@gmail.com","Active")";
//   //check the data insertion
//    if(mqsqli_query($conn,$sqlI))
//    {
//        echo "New records are seccessfully created";
//    }
//    else{
//        die("Records creation failed " . mysqli_error());
//    }
?>