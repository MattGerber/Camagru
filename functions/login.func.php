<?php
	// include "../index.php";
	session_start();
	if(isset($_POST['login-submit']))
	{
	    try
	    {
			$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
			
			$email = $_POST['email'];
			$passwd = (hash('whirlpool',(hash(whirlpool,$_POST['passwd']))));
			
			$select = $con->prepare("SELECT * FROM users WHERE email =:email and `password`=:passwd");
			$select->bindParam(':email',$email);
			$select->bindParam(':passwd',$passwd);
			
			$select->setFetchMode(PDO::FETCH_ASSOC);
			$select->execute();
			
			$data = $select->fetch();
			// print_r($data);

			if (empty($passwd)) {
				// print_r($_POST);
				header("location: ../index.php?error=emptyfield&email=".$email);
				exit();
			}
			else if ($data['email'] == $email && $data['password'] == $passwd){
				$_SESSION['id'] = $data['id'];
				$_SESSION['email'] = $data['email'];
				$_SESSION['username'] = $data['username'];
				$_SESSION['passwd'] = $data['password'];
				header("location:../gallery.php");
			}
			else {
				header("location:../index.php?error=login&mail=".$email);
				echo "Invalid email or password";
			}
		}
		catch(PDOException $e)
		{
			echo "Error".$e->getMessage();
		}
	}
?>