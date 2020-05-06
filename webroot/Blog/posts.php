<?php 

include('db.php');
include('validatePosts.php');

$table = 'POSTS';
$errors = array();
if (isset($_POST['add-post']))
{
    unset($_POST['add-post']);
    $_POST['USER_ID'] = 1;
    $_POST['PUBLISHED'] =1;
    $post = create($table,$_POST);
    dd($_POST);
}