<?php
$imageid = $_POST['delete-submit'];
print_r($_POST);
session_start();
if (isset($imageid)){
	try
	{
	$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
	$delete = $con->prepare("DELETE FROM `image` WHERE id = :imageid");
	$delete->bindParam(':imageid',$imageid);
	$delete->execute();	
	echo $imageid;
	echo "location: ".$_SESSION['url'];
	header("location: ".$_SESSION['url']);
	}
	catch(PDOException $e)
	{
		echo "Error".$e->getMessage();
	}
}