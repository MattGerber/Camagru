<?php
	include_once 'dbh.inc.php';
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
      <a class="navbar-item" href="index.php">
        Home
      </a>

      <a class="navbar-item">
        Documentation
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          More
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item">
            About
          </a>
          <a class="navbar-item">
            Jobs
          </a>
          <a class="navbar-item">
            Contact
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            Report an issue
          </a>
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
      <form action="gallery.php" method="post">
        <div class="level">
				  <input class="input" type="email" name="mailuid" placeholder="Email" style="margin-right: 5px">
				  <input class="input" type="password" name="pwd" placeholder="Password" style="margin-right: 5px">
          <button class="button is-danger" type="submit" name="login-submit" style="margin-right: 5px">
            <strong>Login</strong>
          </a>
        </div>
			</form>
        <a class="button is-danger is-outlined" href="signup.php" style="margin-right: 5px">
          <strong>Sign Up</strong>
        </a>
        <form action="index.php" method="post">
          <button class="button is-danger" type="submit" name="logout-submit" style="margin-right: 5px">
            <strong>Logout</strong>
          </a>
			</form>
      </div>
    </div>
  </div>
</nav>
</html>