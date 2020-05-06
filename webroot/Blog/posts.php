<?php 

include('db.php');
include('validatePosts.php');

if (isset($_POST['add-post']))
{
    unset($_POST['add-post']);
    $_POST['USER_ID'] = 1;
    $_POST['PUBLISHED'] =1;
    dd($_POST);
}