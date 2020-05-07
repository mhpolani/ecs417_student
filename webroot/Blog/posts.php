<?php 

include('db.php');
include('validatePost.php');
$table = 'POSTS';
$posts = selectAll($table);
$title = "";
$body = "";

$errors = array();
if (isset($_POST['add-post']))   //vvvv delicate
{
    $errors = validatePost($_POST); 

    if (!empty($_FILES['image']['name']))
    {        
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination =  "/Images" .$image_name;
        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);  //This function returns TRUE on success, or FALSE on failure.
        if ($result)
        {
            $_POST['image'] = $image_name;
        }
        else
        {
            array_push($errors, "Failed to upload image.");
        }
    }
    else
    {
        array_push($error, "An image for the post is required");
    }

    if(count($errors) == 0)
    {
    unset($_POST['add-post']);
    $_POST['user_id'] = 1;
    $_POST['published'] = isset($_POST['published']) ? 1 : 0;    //Since the 'published' is of type tinyint(boolean) if the published button is clicked, value is set to 1

    $post_id = create($table,$_POST);
    $_SESSION['message'] = "Post created successfully.";
    $_SESSION['type'] = "success";
    header('location: index.php');
    }
    else
    {
        $title = $_POST['title'];
        $body = $_POST['body'];
    }
}


    // $post_id = create($table,$_POST);  //create methods always returns the id of the record it creates
    // global $conn;
    // $sql = "INSERT INTO ha ('USER_ID', 'TITLE', 'IMAGE', 'BODY', 'PUBLISHED') VALUES 
    // $stmt = $conn->prepare($sql);
    // $values = array_values($data); //  The array_values() function returns an array containing all the values of an array
    // $types = str_repeat('s',count($values));
    // $stmt->bind_param($types, ...$values);
    // $stmt->execute();
    // return $stmt;