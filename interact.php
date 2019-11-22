<?php
    session_start();

	include "header2.php";
	include "functions/display.func.php";
?>

<main class="hero is-fullheight has-background-dark">
    <div style="color: white">
    <div class="container has-text-centered">
      <div class="box is-7 is-large has-background-dark" style="margin-top: 5px;">
        <div class="container is-large">
			   <?php 
			   display_all_photos(null,$_GET['id'],"640px","480px");
				session_start();
				$_SESSION['imageid'] = $_GET['id'];   
			   ?>
        </div>
		<a href="functions/like.func.php" class="button is-danger" style="margin-bottom:5px; margin-top:5px;">likes: <?php display_likes($_GET['id']);?></a>
		<form action="functions/comment.func.php" method="post">
		<input class="input" type="text" name ="comment" style="width:500px; margin-bottom:5px;">
		<button class="button is-danger" type="submit" name = "comment-submit" style="margin-botttom:5px;">Comment</button>		
		</form>
		<div class="box has-background-light is-large">
			   <?php 
			   display_comments($_GET['id']);   
			   ?>
        </div>
    </div>
    </div>
        </div>
      </div>
</main>
<?php
	require "footer.php";
?>