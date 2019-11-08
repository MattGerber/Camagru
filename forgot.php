<!DOCTYPE html>
<HTML>
  <header>
    <title>FORGOT PASSWORD</title>
  </header>
  <body>
    <?php include('header2.php') ?>
    <div id="login">
      <div class="title">FORGOT PASSWORD</div>
        <form method="post" style="position: relative;" action="forgot.php">
          <label>Email: </label>
          <input id="mail" name="email" placeholder="email" type="mail">
          <input name="submit" type="submit" value=" SEND ">
        </form>
    </div>
  </body>
</HTML>