<?php
/**
 * Created by PhpStorm.
 * User: MAARTEN
 * Date: 18-11-2018
 * Time: 19:59
 */


//PDO variables
require 'core/database/QueryBuilder.php';
$query = new QueryBuilder();  // correct
$query->connection();
require 'session.php';

//$_POST variables
$textarea = $_POST['textarea'];

if(!empty($_POST['submit'])) {

    if (!empty($textarea)){
        $update = $query->pdo->prepare("UPDATE user SET text='$textarea' WHERE email='$userEmail'");
        $update->execute();
        header('Location: ../views/diary.view.php');
    }
    else {
        echo 'field is empty';
    }
}