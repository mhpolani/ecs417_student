<?php
require('/connect.php');

function dd($value) //to be deleted
{
  echo "<pre>", print_r($value,true),"</pre>";
  die();
}

function selectAll($table, $conditions =[])   //
{
    global $conn;
    $sql = "SELECT * FROM $table";
    if (empty($conditions))
    {
    $stmt = $conn->prepare($sql);
    $stmt-> execute();
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
    }
    else
    {
        // returns records that match conditions
        $i = 0;
        foreach ($conditions as $key => $value)
        {
            if($i == 0)
            {   
            $sql = $sql . " WHERE $key = value";
            }
            else 
            {
                $sql = $sql . " AND $key = ?";
            }
            $i++;
        }
        dd($sql);
        $stmt = $conn->prepare($sql);
        $values = array_values($conditions);
        $types = str_repeat('s',count($values));
        $stmt-> bind_param($types,...$values);
        $stmt-> execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
}

function selectOne($table, $conditions)   //
{
    global $conn;
    $sql = "SELECT * FROM $table";
           // returns records that match conditions
        $i = 0;
        foreach ($conditions as $key => $value)
        {
            if($i == 0)
            {   
            $sql = $sql . " WHERE $key = value";
            }
            else 
            {
                $sql = $sql . " AND $key = ?";
            }
            $i++;
        }
        // $sql = "SELECT + FROM USERS where admin = 0 AND USERNAME = "HAMZA" LIMIT 1"  finds only one record
        $sql = $sql ." LIMIT 1";
        dd($sql);

        $stmt = $conn->prepare($sql);
        $values = array_values($conditions);
        $types = str_repeat('s',count($values));
        $stmt-> bind_param($types,...$values);
        $stmt-> execute();
        $records = $stmt->get_result()->fetch_assoc();   //MYSQLI_ASSOC
        return $records;
}

function create($table,$data)
{
    global $conn;
    $sql = "INSERT INTO $table SET";

    $i = 0;
    foreach ($data as $key => $value)
    {
        if($i == 0)
        {   
        $sql = $sql . " $key = ";
        }
        else 
        {
            $sql = $sql . ", $key = ?";
        }
        $i++;
    }
    $stmt = executeQuery($sql,$data);
    $id = $stmt->insert_id;
    return $id;
}

$conditions = [
    'admin' => 1,
    'username' => 'Hamza'
];
// $users = selectAll('USERS',$conditions);  selectAll paramater conditions is an array
// $users = selectOne('USERS', $conditions);
// dd($users);


?>