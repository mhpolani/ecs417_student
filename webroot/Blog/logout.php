<?php

session_start();

unset($_SESSION['ID']); 
unset($_SESSION['username']);
unset($_SESSION['admin']); 
unset($_SESSION['message']);
unset($_SESSION['type']);
session_destroy();
header('location: viewBlog.php');
?>
