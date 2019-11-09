<?php
    session_start();
    try
    {
        $con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
        
        if(isset($_POST['login-submit']))
        {
            $email = $_POST['mailuid'];
            $passwd = $_POST['pwd'];

            $select = $con->prepare("SELECT * FROM users WHERE email ='$email' and `password`='$passwd'"); 

            $select->setFetchMode(PDO::FETCH_ASSOC);
            $select->execute();
            
            $data = $select->fetch();
            
            if($data['email'] != $email and $data['password'] != $passwd)
            {
                echo "Invalid email or password";
            }
            elseif($data['email'] == $email and $data['password'] == $passwd)
            {
                $_SESSION['email'] = $data['email'];
                $_SESSION['username'] = $data['username'];
                $_SESSION['passwd'] = $data['password'];
                header("location:../gallery.php");
            }
        }
    }
    catch(PDOException $e)
    {
        echo "Error".$e->getMessage();
    }
?>