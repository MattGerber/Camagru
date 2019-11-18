<?php
session_start();
if (isset($_SESSION['id'])){
  require "header2.php";
} else
require "header1.php";

?>
<main class="hero is-fullheight has-background-dark">
  <div class="container has-text-centered">
    <div class="box is-7 is-large has-background-grey-lighter" style="margin-top: 250px;">
    <div class="container is-large">
    <div id="login">
      <div class="title ">Report An Issue:</div>
        <form method="post" style="position: relative;" action="functions/report.func.php">
        <div class="field">
				<label class="label">Name: </label>
  					<p class="control">
    					<input class="input" name="user" type="text" placeholder="Name" value="<?php echo $_SESSION['username'] ?>">
  					</p>
		</div>
		<div class="field">
				<label class="label">Email: </label>
  					<p class="control">
    					<input class="input" name="mail" type="text" placeholder="Email" value="<?php echo $_SESSION['email'] ?>">
  					</p>
		</div>
        <div class="field">
				<label class="label">Issue:</label>
  					<p class="control">
 						<div class="control">
   		 					<textarea class="textarea is-danger" name="txt" placeholder="Issue"></textarea>
  						</div>
  					</p>
				</div>
          <button class="button is-danger" name="report-submit" type="submit">Report</button>
        </form>
    </div>
    </div>
    </div>
</main>