
<?PHP 
$main;
$mainErr="";
$name=$roll=$gender=$program=$email=$img=$password=$confirm_password=$phone="";
$nameErr=$rollErr=$genderErr=$programErr=$emailErr=$imgErr=$passwordErr=$phoneErr=$confirm_passwordErr="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
      $name=test_input($_POST["name"]);
      $gender=test_input($_POST["gender"]);
      $program=test_input($_POST["program"]);
      $roll=test_input($_POST["roll"]);
      $email=test_input($_POST["email"]);
      $phone=test_input($_POST["phone"]);
      $password=test_input($_POST["password"]);
      $confirm_password=test_input($_POST["confirm_password"]);

      
    //Pattern matching codes
    $patname = "/^[A-Za-z]+[\s][A-Za-z]+$/i";
    $patemail = "/^[A-Za-z]+@[a-z]{2,}.[a-z]{2,}$/";
    $patroll ="/^[0-9]+$/gm";
    $patphone="/^[0-9]{10}$/";
    $patpassword= "/^[A-Za-z]+[0-9]+$/gm";

    //checking whether the inpur fields are empty or not
    if($name=="" || $gender=="" || $program=="" ||
                $email=="" || $password=="" || $confirm_password=="")
                {
                   $mainErr="Fill all the input boxes";
                   return false;
                }
    else{ 
          //pattern matching for name
              if(!preg_match($patname,$name)){
                $nameErr="Name pattern doesn't matched";
            }
            else{

                //pattern matching for email
              if(!preg_match($patemail,$email)){
                  $nameErr="Email pattern doesn't matched";
              }
              else{
     
                   //checking for the length of the password
                   if(strlen($password)<8){
                       $passwordErr="Insufficient character 'Must be at least 8 characters'";
                   }
                   else{

                        //pattern matching for password
                        if(!preg_match($patname,$name)){
                             $nameErr="Name pattern doesn't matched";
                          }
                         else{
                               if($password!=$confirm_password){
                                       $passwordErr="Password and Confirm_password doesn't matched";
                                       die("Password and Confirm Password doesn't matched");
                               }
                               else{
                                 //pattern matching for phone
                                   if(!preg_match($patphone,$phone)){
                                      $rollErr="Pattern for Phone doesn't matched";
                                  }           
                                  else{
                                      $main=1;
                                    $mainErr="Data entered successfully";
                                  }
                               }
                         }
                   }
                   

              }
            }         
  }
}

function test_input($data){
      $data=trim($data);
      $data= stripslashes($data);
      $data= htmlspecialchars($data);
      return $data;
}
?>


<?php 
include("createDB.php");
include("createTb.php");
include("insert.php");

if($main){
 echo $mainErr . "<br>";
   echo $name;
   echo "<br>";
   echo $roll;
   echo "<br>";
   echo $email;
   echo "<br>";
   echo $gender;
   echo "<br>";
   echo $phone;
   echo "<br>";
   echo $program;
   echo "<br>";
   echo $password;
   echo "<br>";
}
else{
   echo $nameErr;
   echo "<br>";
   echo $rollErr;
   echo "<br>";
   echo $emailErr;
   echo "<br>";
   echo $genderErr;
   echo "<br>";
   echo $programErr;
   echo "<br>";
   echo $passwordErr;
   echo "<br>";
}
?>