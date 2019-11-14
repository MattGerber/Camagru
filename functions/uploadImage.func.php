<!-- function to upload image to database -->
<?php
    header("location: ../gallery.php");
?>

<main class="hero is-fullheight has-background-dark">
  
<!-- <div class="columns is-fullheight"> -->
  <div class="column is-2 is-sidebar-menu is-hidden-mobile">
    <aside class="menu has-background-grey-lighter">
  <p class="menu-label">
    Previous photos
  </p>
  <ul class="menu-list">
    <li><a>Dashboard</a></li>
    <li><a>Dashboard</a></li>
    <li><a>Dashboard</a></li>
    <li><a>Dashboard</a></li>
    <li><a>Dashboard</a></li>
    <li><a>Dashboard</a></li>
    <li><a>Dashboard</a></li>
    <li><a>Dashboard</a></li>
    <li><a>Dashboard</a></li>
    <li><a>Dashboard</a></li>
    <li><a>Dashboard</a></li>
    <li><a>Dashboard</a></li>
    <li><a>Dashboard</a></li>
    <li><a>Dashboard</a></li>
    <li><a>Customers</a></li>
  </ul>
</aside>
</div>
  <div class="container has-text-centered">
    <div class="box is-7 is-large has-background-grey-lighter" style="margin-top: 50px;">
    <div class="container is-large">
    <table class="table is-bordered">
<form action="functions/uploadImage.func.php" method="post" enctype="multipart/form-data">
    <div class="column has-text-centered">
        <label class="label">Add Photo</label>
    </div>
        <tbody>
            <tr>
                <td><input class="input" name="photo" type="file"></td>
            </tr>
        </tbody>
    </table>
    <button type="submit" name="post" class="button is-danger">Post</button>
    </form>
</div>
</div>
</div>
  </div>
</div>
</div>