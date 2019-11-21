<?php
	require "header2.php";
	include "functions/display.func.php";

?>

<main class="hero is-fullheight has-background-dark">
  
<div class="box is-7 is-large has-background-dark" style="margin-top:50px;">
<div class="columns is-fullheight" style="margin-top: 10px; margin-left:10px;">
  <div class="is-hidden-mobile" style="width:fit-content; max-height:1350px;">
    <aside class="box has-background-grey-lighter">
  <p class="menu-label">
    Previous Images
  </p>
  <!-- <ul class="menu-list"> -->
    <?php display_all_photos($_SESSION['id'], null,"180px","90px");?>
  <!-- </ul> -->
</aside>
  </div>
  <div class="column is-main-content">
  <div class="container has-text-centered">
    <div class="box is-7 is-large has-background-grey-lighter" style="margin-top: 40px;">
    <div class="container is-large">
    <div class="column has-text-centered">
        <label class="label">Add Photo</label>
    </div>
    <br />
            <div class="columns is-centered">
            <div class="box" style="width:fit-content">
            <div class="file is-danger">
  <label class="file-label">
    <input class="file-input" type="file" name="resume" id="photo">
    <span class="file-cta">
      <span class="file-icon">
        <i class="fas fa-upload"></i>
      </span>
      <span class="file-label">
        Choose a file…
      </span>
    </span>
  </label>
</div>
</div>
</div>
    <div class="container has-text-centered">
        <div class="box is-7 is-large has-background-grey-lighter" style="margin-top: 50px;">
      

                <video id="video" style="height:480px; width:640px;"></video>
                <br />
            	<button type="submit" name="take" class="button is-danger" id="capture" style="margin-bottom: 5px;">Take Photo</button>
      <form action="functions/uploadImage.func.php" method="post" enctype="multipart/form-data">
		          <button type="submit" name="post-submit" value ="" class="button is-danger" style="margin-bottom: 5px;" onclick="getImgSrc()" id="post">Post</button>
      </form>
                <!-- <img id="filter"> -->
                <div style="position:relative; height:480px;">
                <canvas id="canvas" style="height:480px; width:640px;"></canvas>
                <canvas id="canvas2" style="height:480px; width:640px; position:relative; top:-486px; left:0;"></canvas>
                </div>
        </div>
    </div>
    <div class="box has-background-grey-lighter">
      <div class="container has-text-centered">
        <label class="label">Choose A Sticker</label>

		<img src="stickers/bubbles-sticker.png" style="height:90px; width:90px; margin-right:10px;" id="sticker" onclick="getSticker(src)">
	
		<img src="stickers/heart-sticker.png" style="height:90px; width:90px; margin-right:10px;" id="sticker" onclick="getSticker(src)">
		
		<img src="stickers/roses-sticker.png" style="height:90px; width:90px; margin-right:10px;" id="sticker" onclick="getSticker(src)">

		<img src="stickers/puppy-sticker.png" style="height:90px; width:90px; margin-right:10px;" id="sticker" onclick="getSticker(src)">
	
		<img src="stickers/smoke-sticker.png" style="height:90px; width:90px; margin-right:10px;" id="sticker" onclick="getSticker(src)">

		<img src="stickers/target-sticker.png" style="height:90px; width:90px;" id="sticker" onclick="getSticker(src)">
	  </div>
    </div>
    <script src="photo.js"></script>
</div>
</div>
</div>
  </div>
</div>
</div>
</main>

<?php
  require "footer.php";
?>