<?php
    require "header2.php"
?>
<main class="hero is-fullheight has-background-dark">
	<div class="container has-text-centered ">
		<div class="box is-7 is-large has-background-grey-lighter "style="margin-top: 250px;">
			<div class="container is-large">
			<form action="includes/signup.inc.php" method="post">
				<div class="field">
					<label class="label">Name</label>
					<div class="control">
						<input class="input" name="display-name" type="text" placeholder="Display Name">
					</div>
				</div>

				<div class="field">
				<label class="label">Username</label>
					<div class="control has-icons-left has-icons-right">
						<input class="input is-success" name="uid" type="text" placeholder="Username">
						<span class="icon is-small is-left">
							<i class="fas fa-user"></i>
						</span>
						<span class="icon is-small is-right">
							<i class="fas fa-check"></i>
						</span>
					</div>
					<p class="help is-success">This username is available</p>
				</div>

				<div class="field">
				<label class="label">Email</label>
					<div class="control has-icons-left has-icons-right">
						<input class="input is-danger" name="mail" type="email" placeholder="Email Address">
						<span class="icon is-small is-left">
							<i class="fas fa-envelope"></i>
						</span>
						<span class="icon is-small is-right">
							<i class="fas fa-exclamation-triangle"></i>
						</span>
					</div>
					<p class="help is-danger">This email is invalid</p>
				</div>
				<div class="field">
				<label class="label">Password</label>
  					<p class="control has-icons-left">
    					<input class="input" name="pwd" type="password" placeholder="Password">
    					<span class="icon is-small is-left">
      						<i class="fas fa-lock"></i>
    					</span>
  					</p>
				</div>
				<!-- <div class="field"> -->
  					<!-- <p class="control has-icons-left"> -->
    					<!-- <input class="input" name="pwd-repeat" type="password" placeholder="Re-enter Password"> -->
    					<!-- <span class="icon is-small is-left"> -->
      						<!-- <i class="fas fa-lock"></i> -->
    					<!-- </span> -->
  					<!-- </p> -->
				<!-- </div> -->

				<div class="field">
					<div class="control">
						<label class="checkbox">
						<input type="checkbox">
							I agree to the <a href="#">terms and conditions</a>
						</label>
					</div>
				</div>

				<div class="field is-grouped">
					<div class="control">
						<button type="submit" name="signup-submit" class="button is-danger">Submit</button>
					</div>
				<div class="control">
						<button class="button is-danger is-light">Cancel</button>
				</div>
			</div>
			</form>
	</div>
</main>