<!-- - Resets all the $_SESSION variables and redirects to the homepage.  -->

<?php

session_start();
unset($_SESSION['ID']); //manually removes all data by resetting variables
unset($_SESSION['username']);
unset($_SESSION['admin']); 
unset($_SESSION['message']);
unset($_SESSION['type']);
session_destroy();
header('location: index.php');  //on logging out, redirects user to the main landing page ie index.php
?>
