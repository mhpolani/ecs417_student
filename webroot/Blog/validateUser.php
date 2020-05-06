<?php

function validateUser($user)
{
    $errors = array();
    if (empty($user['username']))   // to prevent a user with null details to be created (validation)
    {
        array_push($errors, 'Username is required');
    }
    if (empty($user['email']))    
    {
        array_push($errors, 'Email is required');
    }
    if (empty($user['password']))    
    {
        array_push($errors, 'Password is required');
    }
    if (empty($user['passwordConfirmation'] !== $user['password']))    
    {
        array_push($errors, 'Passwords do not match');
    }
    return $errors;
}
 ?>