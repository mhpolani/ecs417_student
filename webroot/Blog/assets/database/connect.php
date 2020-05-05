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
    echo("yes");
}

// $fname = $_POST["Hamza"];
// $sname = $_POST["Polani"];
// $email = $_POST["mhpolanto@gmail.com"];
// $pass1 = $_POST["123"];

$sql = "INSERT INTO USERS (ad,firstName,lastName,email,pw) VALUES ('1','Hamza',
'Polani', 'mhpolanto@gmail.com', '123')";

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



 