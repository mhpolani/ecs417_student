<?php
require('connect.php');

function dd($value)
{
    echo "<pre>", print_r($value,true), "</pre";
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
        // $sql = "SELECT * FROM $tab
        $i = 0;
        foreach($conditions as $key => $value)        
        {
            if ($i === 0)
            {
                $sql = $sql . " WHERE $key=?";
            }
            else
            {
                $sql = $sql . " AND $key=?";                
            }
            $i++;
        }
        
        $stmt = $conn->prepare($sql);
        $values = array_values($conditions);
        $types = str_repeat('s',count($values));  //
        $stmt->bind_param($types, ...$values);   //Bind parameters—also called dynamic parameters or bind variables—are an alternative way to pass data to the database. ... When using bind parameters you do not write the actual values but instead insert placeholders into the SQL statement. That way the statements do not change when executing them with different values.
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;    
    }
}

$conditions = 
[
    'firstName' => 'Hamza',
    'ad' => 1
];
$users = selectAll('USERS',$conditions);
dd($users);


