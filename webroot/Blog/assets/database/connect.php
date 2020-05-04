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

// $fname = $_POST["Hamza"];
// $sname = $_POST["Polani"];
// $email = $_POST["mhpolanto@gmail.com"];
// $pass1 = $_POST["123"];

$sql = "INSERT INTO USERS (firstName,lastName,email,pw) VALUES ('Hamza',
'Polani', 'mhpolanto@gmail.com', '123')";

if ($conn->query($sql) === TRUE) 
{
    echo("YOO");   
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();  

$sql = "SELECT * FROM USERS";
$stmt = $conn->prepare($sql);
$stmt-> execute();
$users = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

var_dump($users);
?>



 