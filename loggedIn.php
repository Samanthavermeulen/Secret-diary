<?php
/**
 * Created by PhpStorm.
 * User: MAARTEN
 * Date: 2-11-2018
 * Time: 11:45
 */

//PDO variables
require 'session.php';
require 'core/database/QueryBuilder.php';
$query = new QueryBuilder();  // correct
$query->connection();



//$_POST variables
$email = $_POST['email'];
$password = $_POST['password'];

//if the button was pushed - continue
if(!empty($_POST['submit'])){

    //if the email and the password in not empty - continue
    if(!empty($email) && !empty($password)) {
        //if the email and the password is in the database - continue
        $statement = $query->pdo->prepare ("SELECT * FROM user WHERE email='$email' AND password='$password'");
        $statement->execute();
        $check_user = $statement->fetchAll(PDO::FETCH_ASSOC);
        if(count($check_user) == 1){
            //session
            $_SESSION["IsSignedin"] = true;
            $_SESSION["userEmail"] = $email;

            header('Location: ../views/diary.view.php');

        }
        //if the user doesnt have a account get a warning
        else{
            echo "<p>"."You don't have a account sorry!."."</p>";
        }
        //else get a warning that the fields are empty
    }else {
        echo "<p>"."Field(s) are empty."."</p>";
    }
}







//else get warning you need a account!

//