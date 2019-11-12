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
</main>