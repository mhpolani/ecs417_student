<?php
include('db.php');
if (isset($_POST['register-btn']))
{
    $errors = array();
    
    if (empty($_POST['username']))   // to prevent a user with null details to be created (validation)
    {
        array_push($errors, 'Username is required');
    }
    if (empty($_POST['email']))    
    {
        array_push($errors, 'Email is required');
    }
    if (empty($_POST['password']))    
    {
        array_push($errors, 'Password is required');
    }
    if (empty($_POST['passwordConfirmation'] !== $_POST['password']))    
    {
        array_push($errors, 'Passwords do not match');
    }
    if(count($errors) === 0)
    {
        unset($_POST['register-btn'], $_POST['passwordConfirmation']);
        $_POST['admin'] = 0;
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user_id = create('USERS', $_POST);
        $user = selectOne('USERS', ['ID' => $user_id]);
        dd($user);
    }   
}
?>