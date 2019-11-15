<?php
function display_all_photos($id) {
	$con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
		try {
			if (isset($id)){
				$all_photos = "SELECT * FROM `image` WHERE `userid` = :id ORDER BY id DESC";
				$get_all_photos = $con->prepare($all_photos);
				$get_all_photos->bindParam(':id', $id);
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
						   <a href=''><img style='height:480; width:640;' src=data:image/png;base64,".base64_encode($image['source'])."></a>
					   </h1>
					<br />
					</div>";
				}
			}
		} catch (PDOException $exception) {
			echo $all_photos."<br>".$exception;
		}
	}
	?>