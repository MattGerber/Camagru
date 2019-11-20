<?php
  require "header5.php";
  session_start();
  $_SESSION['token'] = $_GET['verify'];
?>
<main class="hero is-fullheight has-background-dark">
  <div class="container has-text-centered">
	<div class="box is-7 is-large has-background-grey-lighter" style="margin-top: 250px;">
    <div id="login">
      <div class="title">Please Enter Username</div>
        <form method="post" style="position: relative;" action="functions/verify.func.php">
		<div class="control has-icons-left has-icons-right">
						<input class="input" name="username" type="text" placeholder="Username">
						<span class="icon is-small is-left">
							<i class="fas fa-user"></i>
						</span>
		</div>
		<br />
          <button class="button is-danger" name="verify-submit" type="submit">VERIFY</button>
        </form>
	</div>
    </div>
  </div>
</main>