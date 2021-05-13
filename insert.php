<?php 
$name=$roll=$email=$phone=$active="";
$nameErr=$rollErr=$emailErr=$phoneErr=$activeErr="";
    
if($_SERVER["REQUEST_METHOD"] =="POST"){
 
    $name=test_input($_POST["name"]);
    $roll=test_input($_POST["roll"]);
    $phone=test_input($_POST["Phone"]);
    $email=test_input($_POST["email"]);
        $nameErr=$rollErr=$phoneErr=$emailErr="";
        
        $patname="/^[A-Za-z]+[\s][A-Za-z]+$/i";
        $patroll="/^[0-9]+/";
        $patemail="/^[A-Za-z]+@[a-z]{2,}.[a-z]{2,}$/";
        $patphone="/^[0-9]{0,10}$/";

    if(empty($name)){
         $nameErr="Name is required";
    }
    else{ 
        if(!preg_match($patname,$name)){
            $name=$nameErr="Pattern for Name is not matched"; 
        }
    }

    if(empty($roll)){
        $rollErr="Roll is required";
        }
   else{ 
        if(!preg_match($patroll,$roll)){
            $roll=$rollErr="Pattern for Roll is not matched"; 
        }
   }
 
   if(empty($email)){
    $emailErr="Email is required";
}
else{ 
        if(!preg_match($patemail,$email)){
            $email=$emailErr="Pattern for Email is not matched"; 
        }
}
 
if(empty($phone)){
    $phoneErr="Phone is required";
}
else{ 
        if(!preg_match($patphone,$phone)){
            $phone=$phoneErr="Pattern for Roll is not matched"; 
        }
}


if (empty($_POST["mySelect"])) {
    $activeErr = "Gender is required";
  } else {
    $active = test_input($_POST["mySelect"]);
  }

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>


<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname="institute";

  $conn=mysqli_connect($servername ,$username ,$password ,$dbname);

  if(!$conn){
      die("Connection failed: " . mysqli_error());
  }
  else{
      echo "Connected sucessfully <br>";
  }

  //Insert Data to the database
//   $sqlI="INSERT INTO tbl_users (id, name, roll, mobile_number,email,status) VALUES(1,$name,$roll,$phone,$email,$active)";

$sql="INSERT INTO tbl_users (name, roll, mobile_number, email, status) 
         VALUES ('$name', '$roll', '$phone', '$email', '$active')";

//  $sql="INSERT INTO `tbl_users` (`id`, `name`, `roll`, `mobile_number`, `email`, `status`) 
//          VALUES ('1', 'Nikesh Gamal', '191624', '16619864', 'nikeshgamal@gmail.com', 'active')"; 
  //check the data insertion
   if(mysqli_query($conn,$sql))
   {
       echo "New records are seccessfully created";
   }
   else{
      echo "Error";
   }
?>