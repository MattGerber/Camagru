<?php
session_start();
function sendmailverify($email, $body, $token){

	$subject ="Camagru";
	$from = "camagrunoreply@gmail.com";
	// $body = '
	// <html>
	// <head>
	//   <title>Verify your account</title>
	// </head>
	// <body>
	//   <a href="http://localhost:8080/camagru/verify.php?verify='.$token.'">Click here to verify account</a>
	// </body>
	// </html>';
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	// echo $body;
	mail($email,$subject,$body,$headers);
}
function sendmailforgot($from, $txt){

	$to = "camagrunoreply@gmail.com";
	$subject = "Reported Issue:";
	$txt .= "\nReported by: ".$from;

	mail($to,$subject,$txt);

}
?>