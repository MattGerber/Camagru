<?php
    session_start();

    include "header2.php";
?>

<main class="hero is-fullheight has-background-dark">
    <div style="color: white">
        Welcome <?php echo $_SESSION['username'] ?>!!
    </div>
</main>