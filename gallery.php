<?php
    session_start();

    include "header2.php";
?>

<main class="hero is-fullheight has-background-dark">
    <a class="button is-danger" href="postImage.php" style="margin-right: 1100px; margin-top: 5px; margin-left: 5px">
        <strong>Add a Photo</strong>
    </a>
    <div class="container has-text-centered">
      <div class="box is-7 is-large has-background-dark" style="margin-top: 5px;">
        <div class="container is-large">
        <div class="card">
            <div class="card-image">
                <figure class="image is-100x100">
                  <img src="https://unsplash.it/300/200/?random&pic=1" alt="" style="height:400px; width:600px;">
                </figure>
            </div>
            <footer class="card-footer">
                <a class="card-footer-item">
                  Like
                </a>
            </footer>
        </div>
    </div>
    </div>
        </div>
      </div>
</main>