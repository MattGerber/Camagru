<?php
	session_start();
	$imageid = $_SESSION['imageid'];
	$userid = $_SESSION['id'];
	
	$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
	
	$doesexist = $con->prepare("SELECT * FROM `like` WHERE imageid = ? AND userid = ?");
	$doesexist->execute([$imageid, $userid]);
	$d = $doesexist->rowCount();
	if($d > 0){
		try
		{
		$delete = $con->prepare("DELETE FROM `like` WHERE imageid = :imageid AND userid = :userid");
		$delete->bindParam(':imageid',$imageid);
		$delete->bindParam(':userid',$userid);
		$delete->execute();	
		}
		catch(PDOException $e)
		{
			echo "Error".$e->getMessage();
		}
	}
	else{
		try
		{
			$insert = $con->prepare("INSERT INTO `like` (userid,imageid) values(:userid,:imageid)");
			$insert->bindParam(':imageid',$imageid);
			$insert->bindParam(':userid',$userid);
			$insert->execute();
		}
		catch(PDOException $e)
		{
			echo "Error".$e->getMessage();
		}
	}
	header("location: ../interact.php?id=$imageid");
?> 