<?php 
session_start();
include('dbcon.php');

// echo "Hello world";
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Validation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <!-- <script defer src="signup.js"></script> -->
  </head>
  <body>
    <div class="container">
      <form id="form" method= "POST" action="login.php">
        <h1>Login</h1>
        <div class="input-control">
          <label for="username">Username</label>
          <input id="username" name="username" type="text" value="<?php if (isset($_COOKIE["username"])){echo $_COOKIE["username"];}?>"/>
          <div class="error"></div>
        </div>
        <div class="input-control">
          <label for="email">Email</label>
          <input id="email" name="email" type="text" value="<?php if (isset($_COOKIE["email"])){echo $_COOKIE["email"];}?>"/>
          <div class="error"></div>
        </div>
        <div class="input-control">
          <label for="password">Password</label>
          <input id="password" name="password" type="password" value="<?php if (isset($_COOKIE["password"])){echo $_COOKIE["password"];}?>"/>
          <div class="error"></div>
        </div>
        <!-- <div class="input-control">
          <label for="password2">Password again</label>
          <input id="password2" name="password2" type="password" />
          <div class="error"></div>
        </div> -->
        <button type="submit" name="login">Login</button>
        <input type="checkbox" name="remember" <?php if (isset($_COOKIE["user"]) && isset($_COOKIE["pass"])){ echo "checked";}?>> Remember me <br><br>
        <span>
          <?php
            if (isset($_SESSION['message'])){
            echo $_SESSION['message'];
            }
            unset($_SESSION['message']);
          ?>
        </span>
      </form>
        
    </div>
  
  </body>
</html>
