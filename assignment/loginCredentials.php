<?php

$emailLog=$passwordLog="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $emailLog=test_input($_POST["email"]);
        $passwordLog=test_input($_POST["password"]);
    }

    function test_input($data){
        $data=trim($data);
        $data= stripslashes($data);
        $data= htmlspecialchars($data);
        return $data;
    }
?>

<?php

    //Database connection
    $servername="localhost";
    $username="root";
    $password="";
    $Db_name="user_management";

    $conn=mysqli_connect($servername,$username,$password,$Db_name);

    if(!$conn){
        die("Database connection failed");
    }

        $sql="SELECT * FROM tbl_users WHERE email='$emailLog' AND password='$passwordLog'";

        $result=mysqli_query($conn,$sql);
        $row=mysqli_num_rows($result);
        
        if($row==1){
                echo "<h1>You are successfully logged In</h1><br><br>";
            }
        else{
            echo "<h1>Entered Credentials are incorrect<br> Please try again!!!!</h1>";
        }

?>