
<?php
if (isset($_POST['register-btn']))
{
   unset($_POST['register-btn'], $_POST['passwordConfirmation']);
   $_POST['admin'] = 0;
   var_dump($_POST);
//    echo "<pre>", print_r($value,true),"</pre>";
   
}
?>