<?php 

include('db.php');
// include('validatePosts.php');
$table = 'POSTS';
$posts = selectAll($table);


$errors = array();
if (isset($_POST['add-post']))   //vvvv delicate
{
    unset($_POST['add-post']);
    $_POST['user_id'] = 1;
    $_POST['published'] = 1;    
    $post_id = create($table,$_POST);
    header("location: register.php");
    
}


    // $post_id = create($table,$_POST);  //create methods always returns the id of the record it creates
    // global $conn;
    // $sql = "INSERT INTO ha ('USER_ID', 'TITLE', 'IMAGE', 'BODY', 'PUBLISHED') VALUES 
    // $stmt = $conn->prepare($sql);
    // $values = array_values($data); //  The array_values() function returns an array containing all the values of an array
    // $types = str_repeat('s',count($values));
    // $stmt->bind_param($types, ...$values);
    // $stmt->execute();
    // return $stmt;