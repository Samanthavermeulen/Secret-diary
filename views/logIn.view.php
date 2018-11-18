<?php
/**
 * Created by PhpStorm.
 * User: Maarten Ende
 * Date: 30-10-2018
 * Time: 23:01
 */
?>
<?php
require '../partials/header.php';
require '../core/database/QueryBuilder.php';
$object = new QueryBuilder;
//method connection
$object->connection();

?>

    <div class="container, box">
        <h1>Log in</h1>
        <p><b>Welcome to the best diary of the year!</b></p>
        <p>Interested? What are you waiting for.</p>

        <!--Secret diary - form -->
        <form action="../loggedIn.php" method="post">
            <div class="form-group">
                <input type="text" name="email" placeholder="email" class="form-control" id="exampleInputEmail1"><br>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="password" class="form-control" id="exampleInputPassword1"><br>
            </div>
            <input class="btn btn-primary" type="submit" value="Send!" name="submit"><br><br>
        </form>
        <a href="#">Forgot password</a><br><br>
    </div>
    </div>
<?php

?>


<?php
require '../partials/footer.php';
?>