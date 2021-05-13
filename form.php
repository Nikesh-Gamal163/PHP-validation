<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="patternMatching.php" method="POST" id="MYFORM">
        <label>Registration Form:</label><br><br>
        Name: <input type="text" name="name" id="name" /><br><br>
        Roll Number: <input type="number" name="roll" id="roll" /><br><br>
        Mobile: <input type="number" name="Phone" id="Phone" /><br><br>
        Email: <input type="text" name="email" id="email" /><br><br>
        <label>Dropdown:</label>
        <select name="mySelect" id="dropDown">
            <option value="select">---Select---</option>
            <option value="Active">Active</option>
            <option value="Passive">Passive</option>
        </select>
        <br><br>
        <input type="submit" id="SubmitBtn" value="Submit">
        <input type="reset" id="ResetBtn" value="Reset">
    </form>
</body>

</html>