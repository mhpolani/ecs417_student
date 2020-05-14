<?php

function usersOnly($redirect = 'viewBlog.php')
{
    if (empty($_SESSION['ID']))
    {
        $_SESSION['message'] = "You need to be logged in first.";
        $_SESSION['type'] = 'error';
        header('location: ' . $redirect); 
        exit(0);
    }
}

function adminOnly($redirect = 'viewBlog.php')
{
    if (empty($_SESSION['ID']) || (empty($_SESSION['admin'])))   // has to be logged in and has to be admin
    {
        $_SESSION['message'] = "You are not authorized.";
        $_SESSION['type'] = 'error';
        header('location: ' . $redirect); 
        exit(0);
    }
}

function guestsOnly($redirect = 'viewBlog.php')
{
    if (empty($_SESSION['ID']))
    {
        header('location: ' . $redirect); 
        exit(0);
    }
    
}



?>