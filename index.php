<?php
	require "header1.php";
	session_start();
	include "functions/display.func.php"
?>
<main class="hero is-fullheight has-background-dark">
  <!-- <div class="container has-text-centered" style="width:auto; height:auto;"> -->
      <div class="box is-7 is-large has-background-dark" style="margin-top: 5px;">
        <div class="container is-large">
			<?php display_all_photos(null,null, "640px", "480px");?>
    </div>
    </div>
        <!-- </div> -->
      </div>
</main>
<?php
  require "footer.php";
?>
