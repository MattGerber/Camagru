<?php
session_start();
$_SESSION['token'] = $_GET['verify'];
?>
<HTML>
  <header>
    <title>Change Password</title>
  </header>
  <body>
    <?php include('header2.php') ?>
    <div id="login">
      <div class="title">Reset Password</div>
        <form method="post" style="position: relative;" action="functions/changepass.func.php">
          <label>New Password: </label>
          <input  name="newpass" placeholder="Password" type="password">
		  <label>Confirm Password: </label>
          <input  name="confirmpass" placeholder="Re-enter Password" type="password">
          <input name="change-submit" type="submit" value=" SEND ">
        </form>
    </div>
  </body>
</HTML>