<?php
    session_start();

	include "header2.php";
	include "functions/display.func.php";
?>

<main class="hero is-fullheight has-background-dark">
    <div class="container has-text-centered">
      <div class="box is-7 is-large has-background-dark" style="margin-top: 5px;">
        <div class="container is-large">
               <?php display_all_photos(null,null);?>
        </div>
    </div>
    </div>
        </div>
      </div>
</main>