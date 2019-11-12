<?php
    require "header2.php"
?>

<main class="hero is-fullheight has-background-dark">
    <div class="container has-test-center">
    <div class="box is-7 is-large has-background-grey-lighter" style="margin-top: 50px;">
    <div class="container is-large">
    <table class="table is-bordered">
    <!-- needs to go to an upload function -->
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
</div>
</div>
</div>
    </form>
    <html>
<body>

<!-- <nav class="nav has-shadow"> -->
  <div class="container">
    <!-- <div class="nav-left"> -->
      <a class="nav-item">
        Previous Images
      </a>
    </div>
    <label for="menu-toggle" class="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
    </label>
    <input type="checkbox" id="menu-toggle" class="is-hidden"/>
    <div class="nav-right nav-menu">
      <a class="nav-item is-tab is-hidden-tablet">
        <span class="icon"><i class="fa fa-home"></i></span> Home
      </a>
      <a class="nav-item is-tab is-hidden-tablet">
        <span class="icon"><i class="fa fa-table"></i></span> Links
      </a>
      <a class="nav-item is-tab is-hidden-tablet">
        <span class="icon"><i class="fa fa-info"></i></span> About
      </a>
      
      <a class="nav-item is-tab is-active">
        <span class="icon"><i class="fa fa-user"></i></span>
      </a>
      <a class="nav-item is-tab">
        <span class="icon"><i class="fa fa-sign-out"></i></span>
      </a>
    </div>
  </div>
</nav>

<section class="main-content columns is-fullheight">
  
  <aside class="column is-2 is-narrow-mobile is-fullheight section is-hidden-mobile">
    <p class="menu-label is-hidden-touch">Navigation</p>
    <ul class="menu-list">
      <li>
        <a href="#" class="">
          <span class="icon"><i class="fa fa-home"></i></span> Home
        </a>
      </li>
      <li>
        <a href="#" class="is-active">
          <span class="icon"><i class="fa fa-table"></i></span> Links
        </a>

        <ul>
          <li>
            <a href="#">
              <span class="icon is-small"><i class="fa fa-link"></i></span> Link1
            </a>
          </li>
          <li>
            <a href="#">
              <span class="icon is-small"><i class="fa fa-link"></i></span> Link2
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#" class="">
          <span class="icon"><i class="fa fa-info"></i></span> About
        </a>
      </li>
    </ul>
  </aside>
    </div>
  </div>
  
</section>

<footer class="footer is-hidden">
  <div class="container">
    <div class="content has-text-centered">
      <p>Hello</p>
    </div>
  </div>
</footer>
    
</body>
</html>
</main>