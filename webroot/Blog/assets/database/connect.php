<?php
/*
$servername = "localhost";
$username = "root";
$password = "password123"
$db = "login_details";
*/
$servername = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$username = getenv("DATABASE_USER");
$password = getenv("DATABASE_PASSWORD");
$db = getenv("DATABASE_NAME");
// Creates connection
$conn = new mysqli($servername,$username,$password,$db);
// Checks connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
else
{
    echo("yesYESYES");
}

$fname = $_POST["Hamza"];
$sname = $_POST["Polani"];
$email = $_POST["mhpolanto@gmail.com"];
$pass1 = $_POST["pass1"];

$sql = "INSERT INTO DETAILS(firstName,lastName,email,password) VALUES ('$fname',
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



 