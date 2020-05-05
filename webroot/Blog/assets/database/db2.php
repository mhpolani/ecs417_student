<?php
require('connect.php');

function dd($value)
{
    echo "<pre>", print_r($users), "</pre";
    die();
}

function selectAll($table, $conditions = [])
{
    global $conn;
    $sql = "SELECT * FROM $table";
    if(empty($conditions))
    {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;    
    }
    else
    {

    }
}
$conditions = 
[
    'ad' => yes,
    'username' => "Hamza"
];
$users = selectAll('USERS');
dd($users);


