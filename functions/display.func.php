<?php
session_start();
function display_all_photos($id, $uid,$width, $height) {
	$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
	$add = "";
		try {
			if (isset($id)){
				$all_photos = "SELECT image.id AS 'imageid', image.source, users.username, image.userid FROM `image` INNER JOIN users on users.id = userid WHERE image.`userid` = :id ORDER BY image.id DESC  ";
				$get_all_photos = $con->prepare($all_photos);
				$get_all_photos->bindParam(':id', $id);
			}
			else if (isset($uid)){
				$all_photos = "SELECT image.id AS 'imageid', image.source, users.username, image.userid FROM `image` INNER JOIN users on users.id = userid WHERE image.`id` = :id ORDER BY image.id DESC ";
				$get_all_photos = $con->prepare($all_photos);
				$get_all_photos->bindParam(':id', $uid);
			}
			else{
				$all_photos = "SELECT image.id AS 'imageid', image.source, users.username, image.userid FROM `image` INNER JOIN users on users.id = userid ORDER BY image.id DESC";
				$get_all_photos = $con->prepare($all_photos);
			}
			$get_all_photos->execute();
			$data = $get_all_photos->fetchAll(PDO::FETCH_ASSOC);
			if ($data) {
				foreach ($data as $image) {
					if (isset($_SESSION['username'])){
						$_SESSION["url"] = $_SERVER['REQUEST_URI']; 
						if ($_SESSION['id'] == $id)
						$add = '<form action="functions/deletepicture.func.php" method="post"><button type="submit" class="button" name="delete-submit" value ="'.$image['imageid'].'">Delete</button></form>';
						echo "<div class = 'box column is-7 is-offset-one-quarter' style='height:fit-content; width:fit-content;'>
						<br />
					   		<h1 class='subtitle is-3 has-text-centered'>
								<a href='interact.php?id=".$image['imageid']."'><img style='height:$height; width:$width;' src='data:image/png;base64,".base64_encode($image['source'])."'></a>
								<br>
								<strong class='is-size-5'>posted by: 
								<a href='profile.php?user=".$image['username']."'>".$image['username']."</a></strong>
					   		</h1>".$add."
						<br />
						</div>";
					}
					else {
						echo "<div class = 'box column is-7 is-offset-one-quarter' style='height:fit-content; width:fit-content;>
						   		<a href='#'><img style='height:$height; width:$width;' src='data:image/png;base64,".base64_encode($image['source'])."'></a>
						</div>";
					}
				}
			}
		} catch (PDOException $exception) {
			echo $all_photos."<br>".$exception;
		}
	}

function display_comments($id) {
	$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
		try {
			
			$all_comments = "SELECT comment.`id` AS 'commentid',comment.`userid`,comment.`imageid`,comment.`text`,users.username, users.picturesource FROM `comment` INNER JOIN `users` on `userid` = users.id WHERE imageid = :id";
			$get_comments = $con->prepare($all_comments);
			$get_comments->bindParam(':id', $id);
			$get_comments->execute();
			$data = $get_comments->fetchAll(PDO::FETCH_ASSOC);
			$add = "";

			if ($data) {
				foreach ($data as $comment) {
					 print_r($user);
					 if ($_SESSION['id'] == $comment['userid'])
						$add = '<form action="functions/deletecomment.func.php" method="post"><button type="submit" class="button" name="delete-submit" value ="'.$comment['commentid'].'">Delete</button></form>';
				   echo "
					   <h1 class='subtitle  has-text-centered' style ='border-bottom: 2px solid grey' >
							<p><a href='profile.php?user=".$comment['username']."'><img class= 'is-rounded'style='width: 20px; height: 20px;' src='data:image/png;base64,".base64_encode($comment['picturesource'])."'>".$comment['username']."</a> : ".$comment['text'].$add."</p>
					   </h1>
					";
				}
			}
		} catch (PDOException $exception) {
			echo $all_comments."<br>".$exception;
		}
	}
	function display_likes($id) {
		$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
		try {
			$sql = "SELECT count(*) AS 'likes' FROM `like` WHERE `imageid` = :id";
			$likes = $con->prepare($sql);
			$likes->bindParam(':id', $id);
			$likes->execute();
			$data = $likes->fetchAll(PDO::FETCH_ASSOC);
				if ($data) {
					foreach ($data as $likes) {
					   echo "<p>".$likes['likes']."</p>";
					}
				}
			} catch (PDOException $exception) {
				echo $all_comments."<br>".$exception;
			}
		}

	function getuserid($username){
		$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
		
		$select = $con->prepare("SELECT * FROM `users` WHERE username = :user");
		$select->bindParam(':user',$username);
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
		
		$data = $select->fetch();
		return($data['id']);
	}

	function getimgsrc($user){
		$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
		
		$select = $con->prepare("SELECT * FROM `users` WHERE username = :user");
		$select->bindParam(':user',$user);
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
		
		$data = $select->fetch();
		return($data['picturesource']);
	}

	function displayfollowing($user){
		$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
		try {
			$sql = "SELECT count(*) AS 'following' FROM `following` WHERE `userid` = :id";
			$following = $con->prepare($sql);
			$following->bindParam(':id', getuserid($user));
			$following->execute();
			$data = $following->fetchAll(PDO::FETCH_ASSOC);
				if ($data) {
					foreach ($data as $following) {
					   return $following['following'];
					}
				}
			} catch (PDOException $exception) {
				echo $following."<br>".$exception;
			}
	}

	function displayfollowers($user){
		$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
		try {
			$sql = "SELECT count(*) AS 'following' FROM `following` WHERE `followid` = :id";
			$following = $con->prepare($sql);
			$following->bindParam(':id', getuserid($user));
			$following->execute();
			$data = $following->fetchAll(PDO::FETCH_ASSOC);
				if ($data) {
					foreach ($data as $following) {
					   return $following['following'];
					}
				}
			} catch (PDOException $exception) {
				echo $following."<br>".$exception;
			}
	}

	function displayfeed(){
		$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
		try {
			$select = $con->prepare("SELECT * FROM `following` WHERE userid = :id");
			$select->bindParam(':id', $_SESSION['id']);
			$select->execute();
			$data = $select->fetchAll(PDO::FETCH_ASSOC);
				foreach ($data as $follow){
					display_all_photos($follow['followid'],null, "640px", "480px");
				}
			} catch (PDOException $exception) {
				echo $following."<br>".$exception;
		}
	}

	function displayresult($term){
		$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
		
		$param = "%{$term}%";

		$stmt = "SELECT * FROM `users` WHERE username LIKE '$param' ";
		$select = $con->prepare($stmt);
		// $select->bindParam("s",$param);
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
		
		$data = $select->fetchAll();
		if ($data) {
			foreach ($data as $result) {
			   echo "
				   <h1 class='subtitle  has-text-centered' style ='border-bottom: 2px solid grey' >
						<p><a href='profile.php?user=".$result['username']."'><img class= 'is-rounded'style='width: 150px; height: 150px;' src='data:image/png;base64,".base64_encode($result['picturesource'])."'><strong class='has-text-white is-size-1'>".$result['username']."</strong></a> </p>
				   </h1>
				";
			}
		}
	}
?>