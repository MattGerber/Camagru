<?php
function display_comments($id) {
	$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
		try {
			$all_photos = "SELECT * FROM `comment` WHERE `imageid` = :id ORDER BY id DESC";
			$get_comments = $con->prepare($all_photos);
			$get_comments->bindParam(':id', $id);
			$get_comments->execute();
			$data = $get_comments->fetchAll(PDO::FETCH_ASSOC);
			if ($data) {
				echo "adsfadsf";
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
	?>