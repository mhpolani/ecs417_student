<?php if (isset($_POST['register-btn']))
{
    unset($_POST['register-btn']);
    unset($_POST['passwordConfirmation']);
    $_POST['ad'] = 0;
    $_POST['pw'] = password_hash($_POST['pw'], PASSWORD_DEFAULT);
    $user_id = create('USERS', $_POST);
    $user = selectOne('USERS', ['id' => $user_id]);
    dd($user);
} 
?>