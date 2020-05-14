<?php

function validatePost($user)
{
    $errors = array();
    if (empty($user['title']))   // to prevent a user with null details to be created (validation)
    {
        array_push($errors, 'Title is required');
    }
    if (empty($user['body']))    
    {
        array_push($errors, 'Body is required');
    }
    $existingPost = selectOne('POSTS', ['title' => $post['title']]);
    if ($existingPost) 
    {
        array_push($errors, 'A post with the same title already exists!');
    }
    
    return $errors;
}
 
?>