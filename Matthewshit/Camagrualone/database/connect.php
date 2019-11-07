<?php
$servername = "localhost";
$username = "root";
$password = "password";

try {
	$con = new PDO("mysql:host=$servername;dbname=cmagru", $username, $password);
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $exception) {
	echo "connection failed: ".$exception->getMessage();
}

// class Dbh {

// 	private $servername;
// 	private $username; 
// 	private $password;
// 	private $dbname;
// 	private $charset;


// 	public function create(){
// 		$this->servername = "127.0.0.1";
// 		$this->username = "root";
// 		$this->password = "password";
// 		$this->dbname = "camagru";

// 		try {
// 			$dbh = new PDO("mysql:host=$servername", $username, $password);
	
// 			$dbh->exec("CREATE DATABASE IF NOT EXISTS `$dbname`;
// 					CREATE USER '$username'@'localhost' IDENTIFIED BY '$password';
// 					GRANT ALL ON `$dbname`.* TO '$username'@'localhost';
// 					FLUSH PRIVILEGES;") 
// 			or die(print_r($dbh->errorInfo(), true));
	
// 		} catch (PDOException $e) {
// 			die("DB ERROR: ". $e->getMessage());
// 		}
// 	}
// 	public function connect(){
// 		$this->servername = "localhost:8080";
// 		$this->username = "root";
// 		$this->password = "password";
// 		$this->dbname = "Camagru";
// 		$this->charset = "utf8mb4";

// 		try {
// 			$dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
// 			$pdo = new PDO($dsn, $this->username, $this->password);
// 			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 			return $pdo;
// 			echo "Connected successfully";
// 			}
// 		catch(PDOException $e)
// 			{
// 			echo "Connection failed: " . $e->getMessage();
// 			}

		
// 	}

// }
?>