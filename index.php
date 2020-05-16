<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>َMandir</title>
      <link rel="stylesheet" href="style.css">
      <script src="js/main.js"></script>
    </head>
    <body>
      <div class="login-box">
      <form class="box" action = "login.php" method="POST">
        <div class="transparent">
          <h1>Login</h1>
          <div class="textbox">
              <i class="fas fa-user"></i>
              <input class = "input100" type="text" id = "Username" name = "Username" placeholder="Username">
          </div>
          <div class="textbox">
              <i class="fas fa-lock"></i>
              <input class = "input100" type="password" id = "Password" name = "Password" placeholder="Password">
          </div>
          <input type="submit"  class ="Login" id = "Login" name = "Login" value="Login">
          </div>
        </form>
      </div>
      
    </body>
</html>