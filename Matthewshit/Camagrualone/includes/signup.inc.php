<?php
if (isset($_POST['signup-submit'])) {
    require 'dbh.inc.php';
    
    $name = $_POST['display-name'];
    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $pwd = $_POST['pwd'];
    $pwd_repeat = $_POST['pwd-repeat'];
    
    if(empty($username) || empty($name) || empty($email) || empty($pwd) || empty($pwd_repeat)) {
		$message = "Please fill all fields";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("location: ../signup.php?error=emptyfield&display-name=".$name."&uid=".$usermane."&mail=".$email);
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9_]*$/", $username)){
		header("location: ../signup.php?error=emptyfielf&display-name=".$name."&mail=".$email);
		$message = "Username should only contain letters, numbers and underscores";
		echo "<script type='text/javascript'>alert('$message');</script>";
        exit();
    }
    else if ($pwd !== $pwd_repeat) {
		header("location: ../signup.php?error=emptyfielf&display-name=".$name."&uid=".$usermane."&mail=".$email);
		$message = "passwords do not match";
		echo "<script type='text/javascript'>alert('$message');</script>";
        exit();
    }
    else {
        $conn = new Dbh;
        $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
        $stmt = mysqli_stmt_init($conn);
        $stmt = $conn->connect()->prepare($sql);
        if (!$stmt->execute([$username])){
            header("location: ../signup.php?error=sqlerror");
            exit();
        }
        else{
            echo "dfsafdsa";
        }
        
        // $stmt = $con->connect()->prepare($sql);
        // $stmt->execute;
        

    }
}