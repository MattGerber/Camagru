<?php
include "sendmail.func.php";
if (isset($_POST["forgot-submit"])){
	$email = $_POST["email"];
	try
	{
		$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
		
		$select = $con->prepare("SELECT * FROM `users` WHERE email =:email");
		$select->bindParam(':email',$email);
		
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
		
		$data = $select->fetch();
		$token = $data['token'];
	}
	catch(PDOException $e)
	{
		echo "Error".$e->getMessage();
	}

	
	$body = '
	<html>
	<head>
	<title>Reset Password</title>
	</head>
	<body>
	<a href="http://localhost:8080/camagru/changepass.php?verify='.$token.'">Click here to reset password</a>
	</body>
	</html>';
	sendmailverify($email, $body, $token);
	echo "nannanananannana";
		header("location: ../index.php");
	}
	?>