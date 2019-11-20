<?php
  require "header2.php";
  include "functions/display.func.php";

 // display_all_photos($_SESSION['id']);
  session_start();
?>
<main class="hero is-fullheight has-background-dark">
<div class='columns'>
<div class='container profile'>

<div class='section profile-heading'>
  <div class='columns is-mobile is-multiline'>
    <div class='column is-2 has-text-white'>
      <span class='header-icon user-profile-image '>
	  <figure class= "image is-128x128">
        <img class="is-rounded" src="<?php echo "data:image/png;base64,".base64_encode(getimgsrc($_GET['user'])) ?>">
	  </figure>
      </span>
    </div>
    <div class='column is-4-tablet is-10-mobile name '>
        <a class='button is-danger is-outlined' href='' style='margin: 5px'>
          follow
        </a>
		<br>
		<strong class='has-text-white is-size-1'><?php echo $_GET['user'] ?></strong>
        <!-- <a class='button is-danger is-outlined' href='changeDetails.php' style='margin: 5px'> 
		    Edit Profile
        </a> -->
    </div>
  </div>
</div>
</div>
</div>
<!-- <div class="container has-text-centered"> -->
      <div class="box is-7 is-large has-background-dark" style="margin-top: 5px;">
        <div class="container is-large">
          <?php display_all_photos(getuserid($_GET['user']),null, "640px", "480px"); ?>
        </div>
	  </div>
<!-- </div> -->
</main>
<?php
  require "footer.php";
?>
