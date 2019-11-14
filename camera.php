<?php
    require "header1.php"
?>
<main class="hero is-fullheight has-background-dark">
    <div class="container has-text-centered">
        <div class="box is-7 is-large has-background-grey-lighter" style="margin-top: 50px;">
      

                <video id="video" style="height:400px; width:500px;"></video>
				<form action="camera.php" method="post" enctype="multipart/form-data">
            	<button type="submit" name="take" class="button is-danger" id="capture">Take Photo</button>
				</form>
                <canvas id="canvas" style="height400px; width:500px;"></canvas>
        </div>
    </div>
    <script src="photo.js"></script>
</main>