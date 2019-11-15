<?php
session_start();
include "functions/images.func.php";
?>
<HTML>
  <header>
    <title>Change Password</title>
  </header>
  <body>
    <?php include('header2.php')?>
	<?php 
	display_all_photos($_SESSION['id']) 
	?>
    <div id="login">
    </div>
  </body>
</HTML>