<?php
include('db.php');
if (isset($_POST['register-btn']))
{
    unset($_POST['register-btn'], $_POST['passwordConfirmation']);
    dd($_POST);
    
}
?>