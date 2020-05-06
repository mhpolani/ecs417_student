<?php
include('db.php');

$errors = array();
$username = '';
$email = '';
$password = '';
$passwordConfirmation = '';
if (isset($_POST['register-btn']))
{
    
    
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
    // if (empty($_POST['passwordConfirmation'] !== $_POST['password']))    
    // {
    //     array_push($errors, 'Passwords do not match');
    // }
    $existingUser = selectOne('USERS', ['email' => $user['email']]);
    if (isset($existingUser))
    {
        array_push($errors,'A user with that email already exists.');
    }

    if(count($errors) === 0)
    {
        unset($_POST['register-btn'], $_POST['passwordConfirmation']);
        $_POST['admin'] = 0;
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user_id = create('USERS', $_POST);
        $user = selectOne('USERS', ['ID' => $user_id]);
        dd($user);
        // Log user in
        $_SESSION['ID'] = $user['ID'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['admin'] = $user['admin'];
        $_SESSION['message'] = 'You are now logged in!';
        $_SESSION['type'] = 'success';
        header('location: ' . 'index.php');
        exit();
        
    }   
    else  //prevents wipeout of all data if there is an error
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConfirmation = $_POST['passwordConfirmation'];
    }
}

?>