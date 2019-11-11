<?php
    // include "../signup.php";
    if (isset($_POST['signup-submit'])){

		$username = $_POST['username'];
		$email = $_POST['email'];
		$passwd = $_POST['passwd'];
		$pwd_repeat = $_POST['passwd-repeat'];
		$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
		
		$doesexist = $con->prepare("SELECT * FROM `users` WHERE username = ?");
		$doesexist->execute([$username]);
		$d = $doesexist->rowCount();
		if(empty($username) || empty($email) || empty($passwd) || empty($pwd_repeat)) {
			// print_r($_POST);
			header("location: ../signup.php?error=emptyfield&uid=".$username."&mail=".$email);
			exit();
		}
		else if (!preg_match("/^[a-zA-Z0-9_]*$/", $username)){
			header("location: ../signup.php?error=username&display-name=".$name."&mail=".$email);
			exit();
		}
		else if ($passwd !== $pwd_repeat) {
			header("location: ../signup.php?error=password&display-name=".$name."&uid=".$usermane."&mail=".$email);
			exit();
		}
		else if($d > 0){
			header("location: ../signup.php?error=userexists&display-name=".$name."&uid=".$usermane."&mail=".$email);
			exit();
		}
		else{
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
    }
?> 