<?php
    try
    {
        $con = new PDO("mysql:host=localhost;dbname=login", "root", "roooot");

        echo "connected";
    }
    catch(PDOException $e)
    {
        echo "Error".$e->getMessage();
    }
?>