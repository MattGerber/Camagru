<?php
    require "header1.php"
?>
<main class="hero is-fullheight has-background-dark">
    <div class="container has-text-centered">
        <div class="box is-7 is-large has-background-grey-lighter" style="margin-top: 50px;">
      

                <video id="video" style="height:480px; width:640px;"></video>
                <br />
				<!-- <form action="" method="post" enctype="multipart/form-data"> -->
            	<button type="submit" name="take" class="button is-danger" id="capture">Take Photo</button>
				<!-- </form> -->
                <br />
                <canvas id="canvas" style="height:480px; width:640px;"></canvas>
        </div>
    </div>
    <script src="photo.js"></script>
</main>