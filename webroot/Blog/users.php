<?php
include("db2.php");

if (isset($_POST['register-btn']))
{
    unset($_POST['register-btn']);
    unset($_POST['passwordConfirmation']);
    $_POST['ad'] = 0;
    dd($_POST);
}