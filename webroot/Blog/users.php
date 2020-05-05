
<?php
if (isset($_POST['register-btn'])) //if this button is clicked
{
   unset($_POST['register-btn'], $_POST['passwordConfirmation']);
   $_POST['admin'] = 0;
   $_POST['password'] = password_hash($_POST['password'],PASSWORD_DEFAULT);
   
   var_dump($_POST);
   die(); 
//    echo "<pre>", print_r($value,true),"</pre>";
   
}
?>