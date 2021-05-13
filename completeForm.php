<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .error{
          color:red;
      }
    </style>
</head>

<body>
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
   
    <!-- <form action="<?php  //echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" id="MYFORM"> -->
    <form action="insert.php" method="POST" id="MYFORM">
        <label>Registration Form:</label><br><br>
        Name: <input type="text" name="name"  /> <span  class="error">*<?php// echo $nameErr;?></span> <br><br>
        Roll Number: <input type="number" name="roll"/><span class="error"><?php //echo $rollErr;?></span> <br><br>
        Mobile: <input type="number" name="Phone" /><span class="error"><?php //echo $phoneErr;?></span> <br><br>
        Email: <input type="text" name="email" /><span class="error">*<?php //echo $emailErr;?></span> <br><br>
        <label>Dropdown:</label>
        <select name="mySelect" id="dropDown">
            <option value="select">---Select---</option>
            <option value="Active" name="active" <?php //if (isset($active) && $active=="active") echo "checked";?> >Active</option>
            <option value="Passive" name="passive" <?php //if (isset($passive) && $passive=="passive") echo "checked";?>>Passive</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <input type="reset" name="reset" value="Reset">
    </form>

    <?php
    //  echo "<h2>Your Output:</h2>";
    //  echo "<br>";
    //  echo $name;
    //  echo "<br>";
    //  echo $roll;
    //  echo "<br>";
    //  echo $email;
    //  echo "<br>";
    //  echo $phone;
    //  echo "<br>";
    //  echo $active;
    ?>
</body>

</html>