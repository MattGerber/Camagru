<?php
$message = "";
$to = "";
$subject ="";
$from = "camagrunoreply@gmail.com";
$body = "";
$headers = "From: ".$from;
mail($to,$subject,$body,$headers);