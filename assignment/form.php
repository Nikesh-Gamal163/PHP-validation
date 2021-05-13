<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div id="displayInfo">
    </div>

    <label id="title">Form Registration</label>
    <form action="index.php" method="POST" autocomplete="off">

        <div id="main" style="display: flex; justify-content: space-between; width: 60%;">
            <div>
                <p id="name" onmouseover="information(0)" onmouseout="information(8)">Name <span
                        class="asterisk">*</span> :     <input type="text" name="name" id="Name"
                        placeholder="Enter Full Name"></p>
                <p id="GenderP" onmouseover="information(1)" onmouseout="information(8)"> Gender<span
                        class="asterisk">*</span>:
                    <input type="radio" name="gender" value="male" required> <span>Male</span>
                    <input type="radio" name="gender" value="female"> <span>Female</span>
                    <input type="radio" name="gender" value="other"> <span>Other</span>
                </p>
                <p id="program" onmouseover="information(4)" onmouseout="information(8)">Program<span
                        class="asterisk">*</span>:
                    <select name="program" id="Programin" required>
                        <option value="0">---Select---</option>
                        <option value="1">BE Software</option>
                        <option value="2">BE IT</option>
                        <option value="3">BE Civil</option>
                    </select>
                </p>

                <p id="email" onmouseover="information(2)" onmouseout="information(8)">Email<span
                        class="asterisk">*</span>: <input type="text" name="email" id="Emailin"
                        placeholder="Enter email address"></p>

            </div>

            <div>
                <p id="image" onmouseover="information(5)" onmouseout="information(8)">
                    Phone Number<span class="asterisk">*</span>: <input type="text" name="phone" placeholder="Enter Phone number">
                </p>

                <p id="password" onmouseover="information(6)" onmouseout="information(8)">
                    Password<span class="asterisk">*</span>: <input type="password" id="Passwordin" name="password"
                        placeholder="Enter Password">
                </p>
                <p id="confirm_password" onmouseover="information(7)" onmouseout="information(8)">
                    Confirm Password<span class="asterisk">*</span>: <input type="password" id="CPasswordin"
                        name="confirm_password" placeholder="Confirm Password">
                </p>

                <p id="roll" onmouseover="information(3)" onmouseout="information(8)">Roll Number<span
                        class="asterisk">*</span>:
                    <input type="text" name="roll" id="Rollin" placeholder="Enter Roll">
                </p>


            </div>
        </div>

        <p><input type="submit" name="submit" value="Submit All" id="subBtn"> <input type="reset" value="Reset All"></p>
    </form>
    <script src="script.js"></script>
</body>

</html>