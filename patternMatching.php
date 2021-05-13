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
        $name=$_POST["name"];
        $roll=$_POST["roll"];
        $phone=$_POST["Phone"];
        $email=$_POST["email"];

        $nameErr=$rollErr=$phoneErr=$emailErr="";
        
        $patname="/^[A-Za-z]+[\s][A-Za-z]+$/i";
        $patroll="/^[0-9]+/";
        $patemail="/^[A-Za-z]+@[a-z]{2,}.[a-z]{2,}$/";
        $patphone="/^[0-9]{10}$/";

    if(empty($name)){
         $nameErr="Name is required";
    }
    else{ 
        if(preg_match($patname,$name)){
            echo "Pattern Match sucessfully";
            echo "<br>";
            echo $name;
        }
        else{
            echo "Error";
            echo "<br>";
        }
    }

    if(empty($roll)){
        $rollErr="Roll is required";
        }
   else{ 
        if(preg_match($patroll,$roll)){
            echo "<br>";
            echo "Pattern Match sucessfully";
            echo "<br>";
            echo $roll;
        }
        else{
            echo "Error";
            echo "<br>";
        }
   }
 
   if(empty($email)){
    $emailErr="Email is required";
}
else{ 
        if(preg_match($patemail,$email)){
            echo "<br>";
            echo "Pattern Match sucessfully";
            echo "<br>";
            echo $email;
        }
        else{
            echo "Error";
            echo "<br>";
        }
}
 
if(empty($phone)){
    $phoneErr="Phone is required";
}
else{ 
        if(preg_match($patphone,$phone)){
            echo "<br>";
            echo "Pattern Match sucessfully";
            echo "<br>";
            echo $phone;
        }
        else{
            echo "Error";
            echo "<br>";
        }
}
 ?>
  
  <?php 
    echo "<h2>Your Output:</h2>";
    echo "<br>";
    echo $name;
    echo "<br>";
    echo $roll;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $phone;
  ?>
</body>
</html>