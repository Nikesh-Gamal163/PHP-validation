
// checking for Empty inputs
var nameErr, genderErr, emailErr, rollErr, programErr, imgErr, passwordErr, confirm_passwordErr;
var Name, gender, email, roll, program, img, password, confirm_password;


//empty variables
// nameErr = genderErr = emailErr = rollErr = programErr = imgErr = passwordErr = confirm_passwordErr = "";
// Name = gender = email = roll = program = img = password= confirm_password= "";


//function called when event is triggered
function validation() {
    
 //assigning values to the variables
 Name = document.getElementById("Name").value; 
 //gender = document.getElementById("gender").value;
 email = document.getElementById("Emailin").value;
 roll = document.getElementById("Rollin").value;
 program = document.getElementById("Programin").value;
 password = document.getElementById("Passwordin").value;
 confirm_password = document.getElementById("CPasswordin").value;

    if (Name == "" || gender == "" || email == "" || roll == "" ||
    password == "" || confirm_password == "") {
        alert("Fill all the boxes carfully.");
    }
    else {
        //pattern
        var patname = Name.match(/^[A-Za-z]+[\s][A-Za-z]+$/i);
        var patemail = email.match(/^[A-Za-z]+@[a-z]{2,}.[a-z]{2,}$/);
        var patroll = roll.match(/^[0-9]+/gm);
        // var patphone = "/^[0-9]{10}$/";
        var patpassword=password.match(/^[A-Za-z]+[0-9]+$/gm);

        if (patname==null) {
            nameErr = "Name Pattern Doesn't matched";
            alert(nameErr);
        }
        else {
            if (patemail==null) {
                emailErr = "Email Pattern Doesn't matched";
                alert(emailErr);
            }
            else {

                if (patroll==null) {
                    rollErr = "Roll Pattern Doesn't matched";
                    alert(rollErr);
                }
                else {

                    //checking password is empty or not also where the password entered matched or not
                    if (password == "" || confirm_password == "") {
                        alert("Password and Confirm Password field can't be empty");
                    }
                    else if (password !==confirm_password) {
                        passwordErr = "Password and confirm password doesn't matched";
                        alert(passwordErr);
                        return false;
                    }
                    else {
                        if (password.length > 8) {
                            if (patpassword==null){
                                 passwordErr="Password Pattern Doesn't matched";   
                                 alert(passwordErr);
                            }
                            else{
                                alert("All data entered correctly");
                            }
                        }
                        else {
                                passwordErr="Not sufficient characters";
                        }
                    }

                }

            }
        }
    }
}

document.getElementById("subBtn").onclick = validation;
