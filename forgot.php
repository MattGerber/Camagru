<?php include('header3.php') ?>
<!DOCTYPE html>
<HTML>
  <header>
    <title>FORGOT PASSWORD</title>
  </header>
  <main class="hero is-fullheight has-background-dark">
    <div class="container has-text-centered">
      <div class="box is-7 is-large has-background-grey-lighter is-centered" style="margin-top: 350px;">
        <div class="container is-large">
        <form method="POST" action="forgot.php">
		<div class="field">
          <label class="label">FORGOT PASSWORD</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input" name="email" type="email" placeholder="Email Address">
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>
            </div>
          </div>
            <div class="control">
              <button type="submit" name="submit" class="button">SEND</button>
            </div>
        </div>
      <div>
      </form>
    </div>
  </main>
</HTML>