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
$conn = new mysqli($servername, $username,$password, $db);
// Checks connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>