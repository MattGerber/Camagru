<?php
    require "header.php"
?>
<main class="hero is-fullheight has-background-dark">
	<div class="container has-text-centered ">
		<div class="box is-7 is-large has-background-grey-lighter "style="margin-top: 10px;">
		<div class="container is-large">
			<form action="includes/login.inc.php" method="post">
				<div class="field">
					<p class="control has-icons-left has-icons-right">
						<input class="input" type="email" name="mailuid" placeholder="Email">
						<span class="icon is-small is-left">
							<i class="fas fa-envelope"></i>
						</span>
						<span class="icon is-small is-right">
							<i class="fas fa-check"></i>
						</span>
					</p>
				</div>
				<div class="field">
					<p class="control has-icons-left">
						<input class="input" type="password" name="pwd" placeholder="Password">
						<span class="icon is-small is-left">
							<i class="fas fa-lock"></i>
						</span>
					</p>
				</div>
				<div class="field">
					<p class="control">
						<button class="button is-danger" name="login-submit" type="submit">Login</button>
					</p>
				</div>
			</form>
			<form action="includes/logout.inc.php" method="post">
				<button class="button is-danger" name="logou-submit" type="submit">Logout</button>
			</form>
		</div>
		</div>
	</div>
</main>