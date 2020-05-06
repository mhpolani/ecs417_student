<?php 
session_start();
require('connect.php');
// include('db.php');
include('validatePosts.php');

$sql = "INSERT INTO $table SET ";
$table = 'POSTSDEMO';
//DEBUGGING
function create($table,$data)
{
    global $conn;
    // $sql = "INSERT INTO $table SET ";
    
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

function executeQuery($sql,$data)
{
    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s',count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}

// END OF DEBUGGING


$errors = array();
if (isset($_POST['add-post']))
{
    unset($_POST['add-post']);
    $_POST['USER_ID'] = 1;
    $_POST['PUBLISHED'] = 1;
    $post_id = create($table,$_POST);  //create methods always returns the id of the record it creates
    dd($post_id);
}