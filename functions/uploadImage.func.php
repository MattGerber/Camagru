<!-- function to upload image to database -->
<?php
	// header("location: ../gallery.php");
	session_start();
	if (isset($_POST['post-submit'])){
		// print_r($_POST);
		$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
		$source = base64_decode(substr($_POST['post-submit'], 22));
		// echo $source;
		$insert = $con->prepare("INSERT INTO `image`(userid, source) VALUES (:userid,:source)");
		$insert->bindParam(":userid", $_SESSION['id']);
		$insert->bindParam(":source", $source);
		// $insert->bindParam(":imagetype", $type);	
		$insert->execute();
		header("location: ../postImage.php?image=success");
	}
	else{
		header("location: ../postImage.php?image=failed");
	}
	// 	// echo "dfsaf";
	// 	$filename = $_FILES['image']['name'];
	// 	$type = $_FILES['image']['type'];
	// 	$user = $_SESSION["username"];
	// 	if  (substr($type,0,5) == "image"){
	// 		$select = $con->prepare("SELECT * FROM users WHERE username =:username");
	// 		$select->bindParam(':username',$user);
	// 		$select->setFetchMode(PDO::FETCH_ASSOC);
	// 		$select->execute();
	// 		$data = $select->fetch();

	// 	}
	// }
?>