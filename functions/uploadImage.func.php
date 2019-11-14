<!-- function to upload image to database -->
<?php
	// header("location: ../gallery.php");
	session_start();
	if (isset($_POST['post-submit'])){
		$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
		$filename = $_FILES['image']['name'];
		// echo "dfsaf";
		$source = file_get_contents($_FILES['image']['tmp_name']);
		$type = $_FILES['image']['type'];
		$user = $_SESSION["username"];
		if  (substr($type,0,5) == "image"){
			$select = $con->prepare("SELECT * FROM users WHERE username =:username");
			$select->bindParam(':username',$user);
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute();
			$data = $select->fetch();

			print_r($_FILES);
			$insert = $con->prepare("INSERT INTO `image`(userid, source) VALUES (:userid,:source)");
			$insert->bindParam(":userid", $data['id']);
			$insert->bindParam(":source", $source);
			// $insert->bindParam(":creationdate", date("YYYY/mm/dd"));	
			$insert->execute();
			header("location: ../postImage.php?image=success");
		}
		else{
			header("location: ../postImage.php?image=failed");
		}
	}
?>