<?php
include('db.php');
include('validateUser.php');

$username = '';
$email = '';
$password = '';
$passwordConfirmation = '';
if (isset($_POST['register-btn'])) //|| isset($_POST['create-admin']))
{
    $errors = validateUser($_POST);
    
    
    if(count($errors) === 0)
    {
        unset($_POST['register-btn'], $_POST['passwordConfirmation']);
        $_POST['admin'] = 0;
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
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
            header('location: dashboard.php');
        } 
        else 
        {
            header('location: index.php');
        }
        // require_once('index.php');
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

    if (isset($_POST['login-btn']))    //validate login
    {
        $errors = validateLogin($_POST);
        
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
                    header('location: dashboard.php');
                } 
                else 
                {
                     header('location: index.php');
                }
                exit();       
            }
            else
            {
                array_push($errors, 'Wrong credentials.');
            }
        }
        $username = $_POST['username'];
        $password = $_POST['password'];
    }


?>