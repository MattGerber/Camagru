<?php
		session_start();
	if (isset($_POST['delete-submit'])){
		$commentid = $_POST['delete-submit'];
		try
		{
		$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
		$delete = $con->prepare("DELETE FROM `comment` WHERE id = :commentid");
		$delete->bindParam(':commentid',$commentid);
		$delete->execute();	
		header("location: ../interact.php?id=".$_SESSION['imageid']);
		}
		catch(PDOException $e)
		{
			echo "Error".$e->getMessage();
		}
	}
?>