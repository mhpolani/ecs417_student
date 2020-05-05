<?php
require('connect.php');
$sql = "SELECT * FROM USERS";
$stmt = $conn->prepare($sql);
$stmt->execute();
$users = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

var_dump($USERS);
