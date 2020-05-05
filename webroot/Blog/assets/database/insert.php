<?php
$fname = $_POST["Hamza"];
$sname = $_POST["Polani"];
$email = $_POST["mhpolanto@gmail.com"];
$pass1 = $_POST["pass"];

$sql = "INSERT INTO USERS SET firstName = $fname ,lastName = $sname ,email = $email ,pw = $pass1, ad = '1'";  


if ($conn->query($sql) === TRUE) 
{
    echo(" yo");   
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();  
?>