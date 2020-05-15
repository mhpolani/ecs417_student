<?php 
include('restrict.php');
include_once('db.php');

$table = 'POSTS';
$posts = selectAll($table);   //makes all the posts available to view on postsindex
$title = "";
$body = "";
$ID = "";
$published = "";
$months = selectAll('MONTHS');
$errors = array();

if(isset($_GET['ID']))  //when the edit button is clicked
{
    $post = selectOne($table, ['ID' => $_GET['ID']]);
    $ID = $post['ID'];
    $title= $post['title'];
    $body = htmlentities($_POST['body']);
    $published = $post['published'];
}

if(isset($_GET['delete_id']))  //when the delete button is clicked
{
    
    $count = delete($table,$_GET['delete_id']);
    $_SESSION['message'] = "Post deleted successfully.";
    $_SESSION['type'] = "success";
    header('location: postsindex.php');
    exit();
}


if (isset($_GET['published']) && isset($_GET['p_id']))
{
    $published = $_GET['published'];
    $p_id = $_GET['p_id'];
    // update published 
    $count = update($table, $p_id, ['published' => $published]);
    $_SESSION['message'] = "Post published state changed.";
    $_SESSION['type'] = "success";
    header('location: postsindex.php');
    exit();
}

if (isset($_POST['add-post']))   //vvvv delicate
{        
    unset($_POST['add-post']);
    $_POST['user_id'] = $_SESSION['ID'];
    $_POST['published'] = isset($_POST['published']) ? 1 : 0;    //Since the 'published' is of type tinyint(boolean) if the published button is clicked, value is set to 1
    $_POST['body'] = htmlentities($_POST['body']);
    $post_id = create($table,$_POST);
    $_SESSION['message'] = "Post created successfully.";
    $_SESSION['type'] = "success";
    header('location: postsindex.php');        
}


if (isset($_POST['edit-post']))  //update code. Also very important to toggle publish functionality
{
       
    
    
    $ID = $_POST['ID'];
    unset($_POST['edit-post'], $_POST['ID']);
    $_POST['user_id'] = $_SESSION['ID'];
    $_POST['published'] = isset($_POST['published']) ? 1 : 0;    //Since the 'published' is of type tinyint(boolean) if the published button is clicked, value is set to 1
    $_POST['body'] = htmlentities($_POST['body']);
    $post_id = update($table, $ID, $_POST);
    $_SESSION['message'] = "Post edited successfully.";
    $_SESSION['type'] = "success";
    header('location: postsindex.php');  //redirects to manage posts page where user can edit,delete and preview posts    
    exit();
    
}
// if (isset($_POST['clear-post']))                       
// {
//     $title = $_POST['title'];
//     $body = $_POST['body'];
//     unset($_POST['clear-post']);
// }

