<?php 

include('db.php');
include('validatePosts.php');



$table = 'POSTSDEMO';
$errors = array();
if (isset($_POST['add-post']))
{
    unset($_POST['add-post']);
    $_POST['USER_ID'] = 1;
    $_POST['PUBLISHED'] = 1;
    $post_id = create($table,$_POST);  //create methods always returns the id of the record it creates
    dd($post_id);
}