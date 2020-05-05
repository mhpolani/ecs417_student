<?php
include("db.php");

if (isset($_POST['register-btn']))
{
    unset($_POST['register-btn']);
    unset($_POST['passwordConfirmation']);
    $_POST['ad'] = 0;
    $_POST['pw'] = password_hash($_POST['pw'], PASSWORD_DEFAULT);
    echo "<pre>", print_r($_POST ,true), "</pre";
    die();
    dd($_POST);

}