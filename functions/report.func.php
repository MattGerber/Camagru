<?php
session_start();
include "sendmail.func.php";
sendmailforgot($_POST['mail'],$_POST['txt']);
if (isset($_SESSION['id'])){
	header("location: ../gallery.php");
}else
	header("location: ../index.php");
?>