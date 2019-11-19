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
		          <button type="submit" name="post-submit" value ="" class="button is-danger" onclick="getimgsrc()" id="post">Post</button>
      </form>
                <br />
                <canvas id="canvas" style="height:480px; width:640px;"></canvas>
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