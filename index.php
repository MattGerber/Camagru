<?php
    session_start();

    include "functions/login.php"
?>
<!DOCTYPE html>
<HTML>
  <header>
    <link rel="stylesheet" type="text/css" href="styles/index.css">
    <meta charset="UTF-8">
    <title>CAMAGRU</title>
  </header>
  <body>
    <?php include('header.php') ?>
    <?php include('footer.php') ?>
    <div id="login">
      <div class="title">LOGIN</div>
        <form method="post" style="position: relative;">
          <label>Email: </label>
          <input id="mail" name="email" placeholder="email" type="mail">
          <label>Password: </label>
          <input id="password" name="passwd" placeholder="password" type="password">
          <input name="submit" type="submit" value=" SIGN IN ">
          <a href="signup.php">Create account</a>
          <a href="forgot.php">Forgot password ?</a>
        </form>
    </div>
  </body>
</HTML