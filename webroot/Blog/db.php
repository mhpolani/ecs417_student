<!-- This file contains reusable functions such as selectAll, create, delete (SQL CRUD) that are used in many parts of my program -->

<?php
session_start();   //starts a session in all files that include db.php
require('connect.php');

function executeQuery($sql,$data)   //using prepared statements
{
    global $conn;
    $stmt = $conn->prepare($sql);  //prepares the query passed to the function
    $values = array_values($data); //  The array_values() function returns an array containing all the values of an array
    $types = str_repeat('s',count($values));  //repeats a string the same number of times as values
    $stmt->bind_param($types, ...$values);  //binds the values passed in the array to the sql parameters in $stmt
    $stmt->execute(); 
    return $stmt;
}

function selectAll($table, $conditions = [])
{
    global $conn;
    $sql = "SELECT * FROM $table";
    if(empty($conditions))
    {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);  //gets result from the prepared statement and fetch_all returns the affected record
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
        $stmt->bind_param($types, ...$values);   
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;    
    }
}

function selectOne($table, $conditions)
{
    $sql = "SELECT * FROM $table";
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
        global $conn; 
        $sql = $sql . " LIMIT 1";    //Limits records grabbed to only 1
        $stmt = $conn->prepare($sql);               //start of executeQuery()
        $values = array_values($conditions);
        $types = str_repeat('s',count($values)); 
        $stmt->bind_param($types, ...$values);   
        $stmt->execute();
        $records = $stmt->get_result()->fetch_assoc();
        return $records;       //end of executeQuery()
}

function create($table,$data)
{
    global $conn;
    $sql = "INSERT INTO $table SET ";
    $i = 0;
    foreach($data as $key => $value)        
    {
        if ($i === 0)
        {
            $sql = $sql . " $key=?";
        }
        else
        {
            $sql = $sql . ", $key=?";                
        }
        $i++;
    }
    $stmt = executeQuery($sql,$data);
    $id = $stmt->insert_id;   //grab the id of the record
    return $id;
}

function update($table, $id, $data)
{
    global $conn;
    $sql = "UPDATE $table SET ";
    $i = 0;
    foreach($data as $key => $value)        
    {
        if ($i === 0)
        {
            $sql = $sql . " $key=?";
        }
        else
        {
            $sql = $sql . ", $key=?";                
        }
        $i++;
    }
    $sql = $sql . " WHERE id=?";
    $data['id'] = $id;
    $stmt = executeQuery($sql,$data);
    return $stmt->affected_rows;  //will return a negative value if query fails 
}

function delete($table, $id)
{
    global $conn;
    $sql = "DELETE from $table WHERE id=?";
    $stmt = executeQuery($sql,['id' => $id]);
    return $stmt->affected_rows;  //will return a negative value if query fails 
}

function getPostsByMonth($month)
{
    global $conn;    
    $sql = "SELECT * FROM POSTS WHERE month = '$month'"; //published = ? AND
    $stmt = $conn->prepare($sql);
    $stmt->execute();  
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;   
}

function searchPosts($term)  //issue with query. 
{
    $match = '%' . $term . '%';
    global $conn;    
    $sql = "SELECT FROM POSTS WHERE published =? AND title LIKE ? OR body LIKE ?";
    $stmt = executeQuery($sql, ['published' => 1, 'title' => $match, 'body' => $match]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;   
}
 