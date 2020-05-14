<!-- This file exists for the purpose of validating posts that a user adds -->

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
    return $errors;
}
 
?>