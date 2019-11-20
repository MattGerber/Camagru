<?php
  require "header2.php";
session_start();
?>
<main class="hero is-fullheight has-background-dark">
    <div class="container has-text-centered">
      <div class="box is-7 is-large has-background-grey-lighter "style="margin-top: 250px; width:350px;">  
	  <figure class= "image is-128x128">
        <img class="is-rounded" src=<?php echo "data:image/png;base64,".base64_encode($_SESSION['pic']) ?>>
	  </figure>
      
	  <form action="functions/changeprofilepic.func.php" method="post" enctype="multipart/form-data">
    <div class="column is-centered">
        <label class="label">Profile Photo</label>
            <div class="box" style="width:fit-content margin-left: 25px;">
            <div class="file is-danger" style="margin-left:35px;">
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
    <!-- <button type="submit" name="post" class="button is-danger">Post</button> -->
		<button type="submit" name="pic-submit" value ="SEND" class="button is-danger">change photo</button>
    </form>
    <br />

<form action="functions/updateinfo.func.php" method="post">
<div class="field">
				<label class="label">Email</label>
					<div class="control has-icons-left has-icons-right">
						<input class="input" name="email" type="email" placeholder="Email Address" <?php if(isset($_SESSION['email'])){echo "value=".$_SESSION['email'];} ?>>
						<span class="icon is-small is-left">
							<i class="fas fa-envelope"></i>
						</span>
                    </div>
</div>
<div class="field">
				<label class="label">Username</label>
					<div class="control has-icons-left has-icons-right">
						<input class="input" name="username" type="text" placeholder="Username" <?php if(isset($_SESSION['username'])){echo "value=".$_SESSION['username'];} ?>>
						<span class="icon is-small is-left">
							<i class="fas fa-user"></i>
						</span>
                    </div>
</div>
<input type="checkbox" name="notifications" <?php if($_SESSION['verified'] == 2){echo "checked";} ?>> notifications
<br />
<button type="submit" name = "change-submit" value="yes" class="button is-danger">update details</button>
</form>
</div>
</div>
</main>
<?php
	require "footer.php";
?>