<?php

function usersOnly()
{
    if (empty($_SESSION['ID']))
    {
        $_SESSION['message'] = "You need to be logged in first.";
        $_SESSION['type'] = 'error';
        header('location: index.php'); 
        exit(0);
    }
}

function adminOnly()
{
    if (empty($_SESSION['ID']) || (empty($_SESSION['admin'])))   // has to be logged in and has to be admin
    {
        $_SESSION['message'] = "You are not authorized.";
        $_SESSION['type'] = 'error';
        header('location: index.php'); 
        exit(0);
    }
}

function guestsOnly()
{
    if (empty($_SESSION['ID']))
    {
        header('location: index.php'); 
        exit(0);
    }
    
}



?>