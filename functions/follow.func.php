<?php
	session_start();
	include "display.func.php";
	print_r($_GET);

	session_start();
	$userid = $_SESSION['id'];
	$followid = getuserid($_GET['user']);;
	
	$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
	
	$doesexist = $con->prepare("SELECT * FROM `following` WHERE followid = ? AND userid = ?");
	$doesexist->execute([$followid, $userid]);
	$d = $doesexist->rowCount();
	if($d > 0){
		try
		{
		$delete = $con->prepare("DELETE FROM `following` WHERE followid = :followid AND userid = :userid");
		$delete->bindParam(':followid',$followid);
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
			$insert = $con->prepare("INSERT INTO `following` (userid,followid) values(:userid,:followid)");
			$insert->bindParam(':followid',$followid);
			$insert->bindParam(':userid',$userid);
			$insert->execute();
			echo "dfsa";
		}
		catch(PDOException $e)
		{
			echo "Error".$e->getMessage();
		}
	}
	header("location: ../profile.php?user=".$_GET['user']);