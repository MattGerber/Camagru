<?php
  require "header2.php";
  session_start();
  if(!(isset($_SESSION['token']))){
	  $_SESSION['token'] = $_GET['verify'];
  }
?>
<main class="hero is-fullheight has-background-dark">
  <div class="container has-text-centered">
    <div class="box is-7 is-large has-background-grey-lighter" style="margin-top: 250px;">
    <div class="container is-large">
    <div id="login">
      <div class="title ">Reset Password</div>
        <form method="post" style="position: relative;" action="functions/changepass.func.php">
        <div class="field">
				<label class="label">New Password</label>
  					<p class="control has-icons-left">
    					<input class="input" name="passwd" type="password" placeholder="New Password">
    					<span class="icon is-small is-left">
      						<i class="fas fa-lock"></i>
    					</span>
  					</p>
				</div>
        <div class="field">
				<label class="label">Confirm Password</label>
  					<p class="control has-icons-left">
    					<input class="input" name="re-passwd" type="password" placeholder="Re-enter Password">
    					<span class="icon is-small is-left">
      						<i class="fas fa-lock"></i>
    					</span>
  					</p>
				</div>
          <button class="button is-danger" name="change-submit" type="submit">CHANGE</button>
        </form>
    </div>
    </div>
    </div>
</main>
<?php
  require "footer.php";
?>