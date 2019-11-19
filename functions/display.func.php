<?php
session_start();
function display_all_photos($id, $uid,$width, $height) {
	$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
	$add = "";
		try {
			if (isset($id)){
				$all_photos = "SELECT * FROM `image` WHERE `userid` = :id ORDER BY id DESC";
				$get_all_photos = $con->prepare($all_photos);
				$get_all_photos->bindParam(':id', $id);
			}
			else if (isset($uid)){
				$all_photos = "SELECT * FROM `image` WHERE `id` = :id ORDER BY id DESC";
				$get_all_photos = $con->prepare($all_photos);
				$get_all_photos->bindParam(':id', $uid);
			}
			else{
				$all_photos = "SELECT * FROM `image`ORDER BY id DESC";
				$get_all_photos = $con->prepare($all_photos);
			}
			$get_all_photos->execute();
			$data = $get_all_photos->fetchAll(PDO::FETCH_ASSOC);
			if ($data) {
				foreach ($data as $image) {
					if (isset($_SESSION['username'])){
						$_SESSION["url"] = $_SERVER['REQUEST_URI']; 
						if ($_SESSION['id'] == $id)
						$add = '<form action="functions/deletepicture.func.php" method="post"><button type="submit" class="button" name="delete-submit" value ="'.$image['id'].'">Delete</button></form>';
						echo "<div class = 'box column is-7 is-offset-one-quarter' style='height:fit-content; width:fit-content;'>
						<br />
					   		<h1 class='subtitle is-3 has-text-centered'>
								<a href='interact.php?id=".$image['id']."'><img style='height:$height; width:$width;' src='data:image/png;base64,".base64_encode($image['source'])."'></a>
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
			
			$all_comments = "SELECT * FROM `comment` INNER JOIN `users` on `userid` = users.id WHERE imageid = :id";
			$get_comments = $con->prepare($all_comments);
			$get_comments->bindParam(':id', $id);
			$get_comments->execute();
			$data = $get_comments->fetchAll(PDO::FETCH_ASSOC);

			if ($data) {
				foreach ($data as $comment) {
					 print_r($user);
				   echo "
					   <h1 class='subtitle  has-text-centered' style ='border-bottom: 2px solid grey' >
							<p><a href='profile.php?user=".$comment['username']."'><img class= 'is-rounded'style='width: 20px; height: 20px;' src='data:image/png;base64,".base64_encode($comment['picturesource'])."'>".$comment['username']."</a> : ".$comment['text']."</p>
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
?>
<form action="" method="post"></form>