<?php
include('db.php');
if (isset($_POST['register-btn']))
{
    unset($_POST['register-btn'], $_POST['passwordConfirmation']);
    $_POST['admin'] = 0;
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $user_id = create('USERS', $_POST);
    $user = selectOne('USERS', ['ID' => $user_id]);
    dd($user);
    
}
?>