<?php
	session_start();
	// require "gallery.php";
	if (isset($_SESSION['token'])){
		// print_r($_POST);
		$username = $_POST['username'];
		try
	    {
			$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
			
			$select = $con->prepare("SELECT * FROM users WHERE username =:user");
			$select->bindParam(':user',$username);
			// $insert->bindParam(':passwd',$passwd);
			
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute();
			
			$data = $select->fetch();
			// echo "nanananana";
			// print_r($data);
			// echo "<script type=>alert('nananananana');</script>";
			$token = $data['token'];
			// print_r($data);
			if ($token == $_SESSION['token']){
				$update = $con->prepare("UPDATE `users` SET `verified` = b'1' WHERE `users`.`username` =:username ");
				$update->bindParam(':username',$data['username']);
				$update->execute();
				header("location:../gallery.php");
			}
			else {
				header("location:../index.php?error=".$token."&sessin=".$_SESSION['token']);
			}
		}
		catch(PDOException $e)
		{
			echo "Error".$e->getMessage();
		}
	}
	else
		header("location:../index.php?error=verifyd");
?>