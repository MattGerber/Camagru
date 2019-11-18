<?php
    require "header2.php";
?>

<main class="hero is-fullheight has-background-dark">
  
<div class="box is-7 is-large has-background-dark" style="margin-top:50px;">
<div class="columns is-fullheight" style="margin-top: px; margin-left:10px;">
  <div class="column is-2 is-sidebar-menu is-hidden-mobile">
    <aside class="box has-background-grey-lighter">
  <p class="menu-label">
    Previous Images
  </p>
  <ul class="menu-list">
    <li><a>Thumbnails go here</a></li>
  </ul>
</aside>
  </div>
  <div class="column is-main-content">
  <div class="container has-text-centered">
    <div class="box is-7 is-large has-background-grey-lighter" style="margin-top: 40px;">
    <div class="container is-large">
    <!-- <table class="table is-bordered"> -->
    <div class="column has-text-centered">
        <label class="label">Add Photo</label>
    </div>
        <tbody>
            <tr>
              <td><input class="input" name="image" type="file" id="photo" style="width:fit-content;"></td>
            </tr>
        </tbody>
    <!-- </table> -->
    <div class="container has-text-centered">
        <div class="box is-7 is-large has-background-grey-lighter" style="margin-top: 50px;">
      

                <video id="video" style="height:480px; width:640px;"></video>
                <br />
            	<button type="submit" name="take" class="button is-danger" id="capture">Take Photo</button>
      <form action="functions/uploadImage.func.php" method="post" enctype="multipart/form-data">
		          <button type="submit" name="post-submit" value ="SEND" class="button is-danger" onclick="getimgsrc()" id="post">Post</button>
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