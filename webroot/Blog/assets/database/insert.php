<?php
require('connect.php');
$fname = $_POST["Hamza"];
$sname = $_POST["Polani"];
$email = $_POST["mhpolanto@gmail.com"];
$pass1 = $_POST["pass"];

$sql = "INSERT INTO USERS (firstName, lastname, email, pw,ad) VALUES ("Hamza", "Polani", "mhpolanto@gmail.com", "123","1")";

global $conn;
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