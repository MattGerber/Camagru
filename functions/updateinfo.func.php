<?php
	session_start();
	if (isset($_POST["change-submit"])){
		if (!isset($_POST['email']) || !isset($_POST['username'])){
			header("location: ../changeDetails.php?error=emptyfield");
			exit();
		}
		$username = $_POST['username'];
		$email = $_POST['email'];
		if (isset($_POST['notifications'])){
			$check = 2;
		}
		else{
			$check = 1;
		}
		try
	    {
			$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
			$update = $con->prepare("UPDATE `users` SET `username` = :user, email = :mail, verified = :note WHERE `users`.`id` =:id ");
			$update->bindParam(':user', $username);
			$update->bindParam(':mail', $email);
			$update->bindParam(':note', $check);
			$update->bindParam(':id', $_SESSION['id']);
			$update->execute();
			$_SESSION['email'] = $email;
			$_SESSION['username'] = $username;
			
			header("location:../changeDetails.php");

		}
		catch(PDOException $e)
		{
			echo "Error".$e->getMessage();
		}
	}