<?php
$dbhost = getenv("host");
$dbport = getenv("port");
$dbuser = getenv("user");
$dbpwd = getenv("password");
$dbname = getenv("database");
// Creates connection
$conn = new MySQLi($dbhost, $dbuser, $dbpwd, $dbname);
// Checks connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>