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
			   display_all_photos(null,$_GET['id']);
				session_start();
				$_SESSION['imageid'] = $_GET['id'];   
			   ?>
        </div>
		<a href="functions/like.func.php" class="button">likes: <?php display_likes($_GET['id']);?></a>
		<div class="container has-background-light is-large">
			   <?php 
			   display_comments($_GET['id']);   
			   ?>
        </div>
		<form action="functions/comment.func.php" method="post">
		<input type="text" name ="comment">
		<button type="submit" name = "comment-submit">Comment</button>		
		</form>
    </div>
    </div>
        </div>
      </div>
</main>