
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
    <div  id="loginForm" >
    <label id="loginTitle">Login Page</label>
    <form action="loginCredentials.php" method="POST" autocomplete="off">
          <p class="section">
              Email:<input type="text" placeholder="Enter your email" name="email" id="email">
          </p>
          <p class="section">
            Password:<input type="password" placeholder="Enter your password" name="password" id="password">
        </p>
        <input type="submit" id="Btn" name="submit" value="Log In">
    </form>
</div>
</body>
</html>