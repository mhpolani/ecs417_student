<?php
$fname = $_POST["Hamza"];
$sname = $_POST["Polani"];
$email = $_POST["mhpolanto@gmail.com"];
$pass1 = $_POST["pass1"];

$sql = "INSERT INTO USERS VALUES ('$fname',
'$sname', '$email', '$pass1')";

if ($conn->query($sql) === TRUE) 
{
    echo("HAHABhai");   
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();  
?>