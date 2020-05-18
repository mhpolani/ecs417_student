<!-- This file serves to provide functionality for register.php and login.php for the new user registration and current user login system.  -->

<?php
include('db.php');
include('validateUser.php');

$username = '';
$email = '';
$password = '';
$passwordConfirmation = '';

if (isset($_POST['register-btn']) || isset($_POST['admin-form']))   //code to provide functionality for the register button on register.php
{
    $errors = validateUser($_POST);
    if(count($errors) === 0)
    {
        unset($_POST['register-btn'], $_POST['passwordConfirmation']);
        $_POST['admin'] = 0;
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);   //encrypts the password,set by the user, in the sql database
        $user_id = create('USERS', $_POST);
        $user = selectOne('USERS', ['ID' => $user_id]);
        
        // Log user in
        $_SESSION['ID'] = $user['ID'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['admin'] = $user['admin'];
        $_SESSION['message'] = 'You are now logged in! Welcome!';
        $_SESSION['type'] = 'success';
        if ($_SESSION['admin'])
        {
            header('location: dashboard.php');   //only admin user is redirected to the dashboard
        } 
        else 
        {
            header('location: addPost.php');
        }        
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

    if (isset($_POST['login-btn']))    //code to provide functionality for the login button on login.php
    {
        $errors = validateLogin($_POST);  //displays error prompts if there are any errors
        
        if(count($errors) === 0)
        {
            $user = selectOne('USERS', ['username' => $_POST['username']]);
            if($user && password_verify($_POST['password'], $user['password']))   //verifies password entered against encrypted pass in the database
            {
                // Log user in
                $_SESSION['ID'] = $user['ID'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['admin'] = $user['admin'];
                $_SESSION['message'] = 'You are now logged in!';
                $_SESSION['type'] = 'success';
                if ($_SESSION['admin'])
                {
                    header('location: dashboard.php'); //redirects admin user to the dashboard page
                } 
                else 
                {
                     header('location: index.php');  //redirects a normal user to the main landing page
                }
                exit();       
            }
            else
            {
                array_push($errors, 'Wrong credentials.');
            }
        }
        else  //prevents wipeout of all data if there is an error
        {
        $username = $_POST['username'];
        $password = $_POST['password'];
        }
    }


?>