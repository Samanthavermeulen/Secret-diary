<?php

//if the session is not already been started - start a new session
if (session_status() != PHP_SESSION_ACTIVE)
{
    session_start();
}

//if the session variable exist and is equal to true - make a variable true else make the same variable false
//isSingedin = is to look if the user is logged in.
if (isset($_SESSION["IsSignedin"]) && $_SESSION["IsSignedin"] == true ) {
    $isSignedIn = true;

    if (isset($_SESSION["userEmail"]) ) {
        $userEmail = $_SESSION["userEmail"];
    }
    else
    {
        $userEmail= '';
    }

}
else
{
    $isSignedIn = false;
    $userEmail= '';
}