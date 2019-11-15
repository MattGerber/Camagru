<?php
    session_start();

	include "header2.php";
	include "functions/images.func.php";
	include "functions/displaycomments.func.php";
?>

<main class="hero is-fullheight has-background-dark">
    <div style="color: white">
    <a class="button is-danger" href="postImage.php" style="margin-right: 1100px; margin-top: 5px; margin-left: 5px">
        <strong>Add a Photo</strong>
    </a>
    <div class="container has-text-centered">
      <div class="box is-7 is-large has-background-dark" style="margin-top: 5px;">
        <div class="container is-large">
			   <?php 
			   display_all_photos(null,$_GET['id']);
				session_start();
				$_SESSION['imageid'] = $_GET['id'];   
			   ?>
        </div>
		<div class="container is-large">
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