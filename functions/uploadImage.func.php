<!-- function to upload image to database -->
<?php
if (isset($_POST['post-submit'])){
	session_start();
	// $source = base64_decode(substr($_POST['post-submit'], 22));
		
	$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
	
	$arr = explode("#",$_POST['post-submit']);
	// print_r($arr);
	if (count($arr) == 2){
		$src = imagecreatefromstring(base64_decode(substr($arr[1], 22)));
		$dst = imagecreatefromstring(base64_decode(substr($arr[0], 22)));
			
		imagecopyresampled($dst, $src, 0, 0, 0, 0, 640, 480, 640, 480);
		ob_start();
			imagepng($dst);
			$source =  ob_get_contents();
		ob_end_clean();
	}
	else {
		$source = base64_decode(substr($arr[0], 22));
	}

	
	$insert = $con->prepare("INSERT INTO `image`(userid, source) VALUES (:userid,:source)");
	$insert->bindParam(":userid", $_SESSION['id']);
	$insert->bindParam(":source", $source);
	
	$insert->execute();
		header("location: ../postImage.php?image=success");
}
else{
	header("location: ../postImage.php?image=failed");
}

	// echo "<img src='data:image/png;base64,".base64_encode($contents)."' alt=''>";
?>