<!-- function to upload image to database -->
<?php
	// header("location: ../gallery.php");
	if (isset($_POST['post'])){
		$filename = mysql_real_escape_string($_FILES['image']['name']);
	}
?>