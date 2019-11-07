<?php

    include "../signup.php";
    try
    {
        $con = new PDO ("mysql:host=localhost;dbname=login", "root", "roooot");

        if(isset($_POST['submit']))
        {
            $email = $_POST['email'];
            $username = $_POST['username'];
            $passwd = $_POST['passwd'];

            $insert = $con->prepare("INSERT INTO users (email,username,passwd) values(:email,:username,:passwd)");
            
            $insert->bindParam(':email',$email);
            $insert->bindParam(':username',$username);
            $insert->bindParam(':passwd',$passwd);

            $insert->execute();
        }
    }
    catch(PDOException $e)
    {
        echo "Error".$e->getMessage();
    }
?>