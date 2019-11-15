<?php
  require "header2.php";
session_start();
?>
	  <figure class= "image is-128x128">
        <img class="is-rounded" src=<?php echo "data:image/png;base64,".base64_encode($_SESSION['pic']) ?>>
	  </figure>
	  <form action="functions/changeprofilepic.func.php" method="post" enctype="multipart/form-data">
    <div class="column has-text-centered">
        <label class="label">Add Photo</label>
    </div>
        <tbody>
            <tr>
                <td><input class="input" name="image" type="file"></td>
            </tr>
        </tbody>
    </table>
    <!-- <button type="submit" name="post" class="button is-danger">Post</button> -->
		<button type="submit" name="pic-submit" value ="SEND" class="button is-danger">change</button>
    </form>

<form action="functions/updateinfo.func.php" method="post">
<input type="text" name="email" value=<?php echo $_SESSION['email'] ?>>
<input type="text" name="username" value=<?php echo $_SESSION['username'] ?>>
<input type="checkbox" name="notifications">
<button type="submit" name = "change-submit" value="yes"></button>
</form>