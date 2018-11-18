<?php
/**
 * Created by PhpStorm.
 * User: Maarten Ende
 * Date: 30-10-2018
 * Time: 23:01
 */
?>
<?php
    require 'session.php';
    require 'partials/header.php';
    require 'core/database/QueryBuilder.php';
    $object = new QueryBuilder;
    //method connection
    $object->connection();

?>

<div class="container, box">
    <h1>Secret Diary</h1>
    <p><b>Store your thoughts permantly and securely.</b></p>
    <p>Interested? Sign up now.</p>

    <!--Secret diary - form -->
    <form action="home.php" method="post">
    <div class="form-group">
        <input type="text" name="email" placeholder="email" class="form-control" id="exampleInputEmail1"><br>
    </div>
        <div class="form-group">
        <input type="password" name="password" class="form-control" id="exampleInputPassword1"><br>
        </div>
        <div class="form-check">
        <input class="form-check-input" id="exampleCheck1" type="checkbox" name="checkbox" value="checkbox"> Stay logged in<br><br>
        </div>
        <input class="btn btn-primary" type="submit" value="Sign up!" name="submit"><br><br>
    </form>
    <a href="views/logIn.view.php">Log in</a><br><br>
    </div>
</div>


<?php

?>


<?php
    require 'partials/footer.php';
?>
