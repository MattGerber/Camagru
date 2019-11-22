<?php
  require "header2.php";
  include "functions/display.func.php";

  
  // display_all_photos($_SESSION['id']);
  session_start();
  
	// if ($_GET['user'] == $_SESSION['username']){
	// 	echo "<script>window.top.location='http://localhost:8080/camagru/myProfile.php'</script>";
	//   }
  $userid = $_SESSION['id'];
  $followid = getuserid($_GET['user']);;
  
  $con = new PDO ("mysql:host=localhost;dbname=camagru", "root", "roooot");
  
  $doesexist = $con->prepare("SELECT * FROM `following` WHERE followid = ? AND userid = ?");
  $doesexist->execute([$followid, $userid]);
  $d = $doesexist->rowCount();
  if($d > 0){
		$_SESSION['follow'] = "unfollow"; 
  }
  else	
  	$_SESSION['follow'] = "follow";
?>
<!DOCTYPE html>
<html>

<main class="hero is-fullheight has-background-dark">
<div class='columns'>
<div class='container profile'>

<div class='section profile-heading'>
  <div class='columns is-mobile is-multiline has-text-left'>
    <div class='column is-2 has-text-white'>
      <span class='header-icon user-profile-image '>
	  <figure class= "image is-128x128">
        <img class="is-rounded" src="<?php echo "data:image/png;base64,".base64_encode(getimgsrc($_GET['user'])) ?>">
	  </figure>
      </span>
    </div>
    <div class='column is-4-tablet is-10-mobile  '>
        <a class='button is-danger is-outlined' href='functions/follow.func.php?user=<?php echo $_GET['user'] ?>' style='margin: 5px'>
         	<?php echo $_SESSION['follow'] ?>
        </a>
			<a><strong class="has-text-white is-size-4 has-text-left is-pulled-right">Following: <?php echo displayfollowing($_GET['user']) ?></strong></a>
			<br>
			<a><strong class="has-text-white is-size-4 is-pulled-right">Followers: <?php echo displayfollowers($_GET['user']) ?></strong></a> 

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
</html>
<?php
  require "footer.php";
?>
