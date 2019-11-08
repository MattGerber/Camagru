<?php
    // include "../signup.php";
    if (isset($_POST['signup-submit'])){

		$username = $_POST['username'];
		$email = $_POST['email'];
		$passwd = $_POST['passwd'];
		$pwd_repeat = $_POST['passwd-repeat'];
		$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
		
		if(empty($username) || empty($name) || empty($email) || empty($pwd) || empty($pwd_repeat)) {
			header("location: ../signup.php?error=emptyfield&display-name=".$name."&uid=".$usermane."&mail=".$email);
			exit();
		}
		else if (!preg_match("/^[a-zA-Z0-9_]*$/", $username)){
			header("location: ../signup.php?error=emptyfielf&display-name=".$name."&mail=".$email);
			exit();
		}
		else if ($pwd !== $pwd_repeat) {
			header("location: ../signup.php?error=emptyfielf&display-name=".$name."&uid=".$usermane."&mail=".$email);
			exit();
		}
        try
        {
            // echo "nanannananana";
            // print_r($_POST);

            $insert = $con->prepare("INSERT INTO users (email,username,`password`) values(:email,:username,:passwd)");
              
            $insert->bindParam(':email',$email);
            $insert->bindParam(':username',$username);
            $insert->bindParam(':passwd',$passwd);


            $insert->execute();
        }
        catch(PDOException $e)
        {
            echo "Error".$e->getMessage();
		}
		header("location: ../index.php");
    }
?> 