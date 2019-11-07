<?php
    include "../index.php";
    try
    {
        $con = new PDO ("mysql:host=localhost;dbname=login", "root", "roooot");

        if(isset($_POST['submit']))
        {
            $email = $_POST['email'];
            $passwd = $_POST['passwd'];

            $select = $con->prepare("SELECT * FROM users WHERE email ='$email' and passwd='$passwd'"); 

            $select->setFetchMode(PDO::FETCH_ASSOC);
            $select->execute();
            
            $data = $select->fetch();

            
            if($data['email'] != $email and $data['passwd'] != $passwd)
            {
                echo "Invalid email or password";
            }
            elseif($data['email'] == $email and $data['passwd'] == $passwd)
            {
                $_SESSION['email'] = $data['email'];
                $_SESSION['username'] = $data['username'];
                $_SESSION['passwd'] = $data['passwd'];
                header("location:../camagru/gallery.php");
            }
        }
    }
    catch(PDOException $e)
    {
        echo "Error".$e->getMessage();
    }
?>