<?php
include "sendmail.func.php";
session_start();
    if (isset($_POST['comment-submit'])){

		// print_r($_SESSION);
		$comment = htmlspecialchars($_POST['comment']);
		$user = $_SESSION['username'];
		$userid = $_SESSION['id'];
		$imageid = $_SESSION['imageid'];

		$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
		
        try
        {
			// print_r($_POST);
			// Why you under the table, Matthew? 
            $insert = $con->prepare("INSERT INTO `comment` (userid,imageid,`text`) values(:userid,:imageid,:txt)");
			
        	$insert->bindParam(':userid',$userid);
        	$insert->bindParam(':imageid',$imageid);
			$insert->bindParam(':txt',$comment);
			
			$insert->execute();
            // echo "nanannananana";
        }
        catch(PDOException $e)
        {
			echo "Error".$e->getMessage();
		}
		header("location: ../interact.php?id=$imageid");

	}