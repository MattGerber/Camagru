<?php
	session_start();
	if (isset($_POST["change-submit"])){
		$passwd = $_POST['passwd'];
		$pwd_repeat = $_POST['re-passwd'];
		$token = $_SESSION['token'];
		try
	    {
			$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");

			if ($passwd !== $pwd_repeat) {
				header("location: ../changepass.php?error=password");
				exit();
			}
			else if (!preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $passwd) || strlen($passwd) < 8)
			{
				header("location: ../changepass.php?error=passwordnotsecure");
				exit();
			}
			else{
				$update = $con->prepare("UPDATE `users` SET `password` = :passwd WHERE `users`.`token` =:token ");
				$update->bindParam(':passwd',hash('whirlpool', hash('whirlpool', $passwd)));
				$update->bindParam(':token', $token);
				$update->execute();
				if (isset($_SESSION['id'])){
					header("location:../gallery.php");
				}else
					header("location:../index.php");
			}
		}
		catch(PDOException $e)
		{
			echo "Error".$e->getMessage();
		}
	}