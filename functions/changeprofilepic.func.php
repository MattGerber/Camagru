<?php
	// header("location: ../gallery.php");
	session_start();
	if (isset($_POST['pic-submit'])){
		$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
		$filename = $_FILES['resume']['name'];
		$source = file_get_contents($_FILES['resume']['tmp_name']);
		$id = $_SESSION['id'];
		// echo $id;
		$type = $_FILES['resume']['type'];
		print_r($_FILES);
		echo $type;
		if  (substr($type,0,5) == "image"){
			$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
			$update = $con->prepare("UPDATE `users` SET `picturesource` = :pic WHERE `users`.`id` =:id ");
			$update->bindParam(':pic', $source);
			$update->bindParam(':id', $id);
			$update->execute();
			$_SESSION['pic'] = $source;
			header("location: ../changeDetails.php");
		}
		else{
			header("location: ../changeDetails.php?error=failed");
		}
	}
?>