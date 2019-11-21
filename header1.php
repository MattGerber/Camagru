<?php
	include_once 'dbh.inc.php';
	session_start();
	// if (isset($_GET['error'])){
	// 	echo "<script>alert('".$_GET['error']."')</script>";
	// }
	
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Camagru</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" href="./styles/style.css">
  </head>
  <nav class="navbar is-black" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="index.php">
      <img src="styles/james-fajardo.png" width="112" height="28">

    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="feed.php">
        Feed
      </a>

      <a href="gallery.php" class="navbar-item">
        Discover
      </a>


    </div>

    <div class="navbar-end">
      <div class="navbar-item">
      <form method="post" action="functions/login.func.php">
        <div class="level">
				  <input class="input" type="email" name="email" placeholder="Email" style="margin-right: 5px" <?php if(isset($_GET['mail'])){echo "value=".$_GET['mail'];} ?>>
				  <input class="input" type="password" name="passwd" placeholder="Password" style="margin-right: 5px">
          <button class="button is-danger" type="submit" name="login-submit" style="margin-right: 5px">
            <strong>Login</strong>
          </a>
        </div>
			</form>
        <a class="button is-danger is-outlined" href="signup.php" style="margin-right: 5px">
          <strong>Sign Up</strong>
        </a>
        <form action="forgot.php" method="post">
          <button class="button is-danger" type="submit" name="forgot-submit" style="margin-right: 5px">
            <strong>forgot password?</strong>
          </a>
			</form>
      </div>
    </div>
  </div>
</nav>
</html>