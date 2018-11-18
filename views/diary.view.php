<?php
/**
 * Created by PhpStorm.
 * User: Maarten Ende
 * Date: 31-10-2018
 * Time: 02:42
 */
?>

<?php
    require '../partials/header.php';
    require '../core/database/QueryBuilder.php';
    $object = new QueryBuilder;
    //method connection
    $object->connection();
    ?>

<button onClick="document.location.href='../index.php'" type="submit" class="btn btn-success log_out" name="logout" >Log out</button>
<form action="../diary.php" method="post">
    <div class="form-group">
        <div class="form-group">
            <label for="exampleTextarea"><h2>Diary</h2></label>
        <textarea name = "textarea" class="form-control" id="exampleTextarea" rows="15"></textarea>
    </div>
        <input class="btn btn-primary right-button" type="submit" value="Submit" name="submit">
</form>

<?php
    require '../partials/footer.php';
?>
