<?php
function display_all_photos($id, $uid) {
	$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
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
				   echo "<div class = 'box column is-7 is-offset-one-quarter'>
					<br />
					   <h1 class='subtitle is-3 has-text-centered'>
						   <a href='interact.php?id=".$image['id']."'><img style='height:480; width:480;' src=data:image/png;base64,".base64_encode($image['source'])."></a>
					   </h1>
					<br />
					</div>";
				}
			}
		} catch (PDOException $exception) {
			echo $all_photos."<br>".$exception;
		}
	}

function display_comments($id) {
	$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
		try {
			$all_comments = "SELECT * FROM `comment` WHERE `imageid` = :id ORDER BY id DESC";
			$get_comments = $con->prepare($all_comments);
			$get_comments->bindParam(':id', $id);
			$get_comments->execute();
			$data = $get_comments->fetchAll(PDO::FETCH_ASSOC);
			if ($data) {
				foreach ($data as $comment) {
				   echo "<div class = 'box column is-7 is-offset-one-quarter'>
					<br />
					   <h1 class='subtitle  has-text-centered'>
						   <p>".$comment['text']."</p></a>
					   </h1>
					<br />
					</div>";
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
?>