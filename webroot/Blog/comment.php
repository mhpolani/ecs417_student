<?php
include('db.php');

if (isset($_POST['add-comment']))   //vvvv delicate
{    
       
    dd($_POST);
    // unset($_POST['add-post']);
    // $_POST['user_id'] = $_SESSION['ID'];
    // $_POST['published'] = isset($_POST['published']) ? 1 : 0;    //Since the 'published' is of type tinyint(boolean) if the published button is clicked, value is set to 1
    // $_POST['body'] = htmlentities($_POST['body']);
    // $post_id = create($table,$_POST);
    // $_SESSION['message'] = "Post created successfully.";
    // $_SESSION['type'] = "success";
    // header('location: postsindex.php');
    
    // else
    // {
    //     $title = $_POST['title'];
    //     $body = $_POST['body'];
    // }
}

?>