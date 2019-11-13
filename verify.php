<?php
session_start();
$_SESSION['token'] = $_GET['verify'];
?>
<HTML>
  <header>
    <title>Verify Account</title>
  </header>
  <body>
    <?php include('header2.php') ?>
    <div id="login">
      <div class="title">Please Enter Username</div>
        <form method="post" style="position: relative;" action="functions/verify.func.php">
          <label>Email: </label>
          <input id="mail" name="username" placeholder="username" type="mail">
          <input name="verify-submit" type="submit" value=" SEND ">
        </form>
    </div>
  </body>
</HTML>