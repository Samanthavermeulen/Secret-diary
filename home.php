<?php
/**
 * Created by PhpStorm.
 * User: Maarten Ende
 * Date: 31-10-2018
 * Time: 01:45
 */

require 'core/database/QueryBuilder.php';
$foobar = new QueryBuilder();  // correct
$foobar->connection();


$email = $_POST['email'];
$password = $_POST['password'];


    if (isset($_POST['submit'])) {

        if (!empty($email) || !empty($password)) {

            $check_user = $foobar->pdo->prepare("SELECT * FROM user WHERE email='$email';");
            $check_user->execute([$email]);

            if($check_user->rowCount() == 1){

                echo "<label>You already exist</label>";

            }else {

                $insert = "INSERT INTO user (email, password) VALUES ('$email', '$password')";

                if($foobar->pdo->query($insert) == true){
                    header('Location: ../views/diary.view.php');
                } else {
                    echo "<label>Something went wrong</label>";
                }

            }
        } else {
            echo "you didn't enter all the boxes";
        }
    } else {
        echo "you didn't submit";
    }

