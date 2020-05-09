<?php 
include('restrict.php');
include('db.php');
include('validatePost.php');
$table = 'POSTS';
$posts = selectAll($table);
$title = "";
$body = "";
$ID = "";
$published = "";


if(isset($_GET['ID']))  //when the edit button is clicked
{
    $post = selectOne($table, ['ID' => $_GET['ID']]);
    $ID = $post['ID'];
    $title= $post['title'];
    $body = $post['body'];
    $published = $post['published'];
}

if(isset($_GET['delete_id']))  //when the delete button is clicked
{
    adminOnly();
    $count = delete($table,$_GET['delete_id']);
    $_SESSION['message'] = "Post deleted successfully.";
    $_SESSION['type'] = "success";
    header('location: index.php');
    exit();
}
if (isset($_GET['published']) && isset($_GET['p_id']))
{
    adminOnly();
    $published = $_GET['published'];
    $p_id = $_GET['p_id'];
    // update published 
    $count = update($table, $p_id, ['published' => $published]);
    $_SESSION['message'] = "Post published state changed.";
    $_SESSION['type'] = "success";
    header('location: index.php');
    exit();
}


$errors = array();
if (isset($_POST['add-post']))   //vvvv delicate
{
    adminOnly();
    $errors = validatePost($_POST); 

    // if (!empty($_FILES['image']['name']))
    // {        
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = $image_name;
        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);  //This function returns TRUE on success, or FALSE on failure.
        if ($result)
        {
            $_POST['image'] = $image_name;
        }
        // else
        // {
        //     array_push($errors, "Failed to upload image.");
        // }
    // }
    // else
    // {
    //     array_push($error, "An image for the post is required");
    // }

    if(count($errors) == 0)
    {
    unset($_POST['add-post']);
    $_POST['user_id'] = $_SESSION['ID'];
    $_POST['published'] = isset($_POST['published']) ? 1 : 0;    //Since the 'published' is of type tinyint(boolean) if the published button is clicked, value is set to 1
    $_POST['body'] = isset($_POST['body']);
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

if (isset($_POST['edit-post']))  //update code
{
    adminOnly();
    $errors = validatePost($_POST); 
    $image_name = time() . '_' . $_FILES['image']['name'];
    $destination = $image_name;
    $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);  //This function returns TRUE on success, or FALSE on failure.
    $_POST['image'] = $image_name;
    
    if(count($errors) == 0)
    {
    $ID = $_POST['ID'];
    unset($_POST['edit-post'], $_POST['ID']);
    $_POST['user_id'] = $_SESSION['ID'];
    $_POST['published'] = isset($_POST['published']) ? 1 : 0;    //Since the 'published' is of type tinyint(boolean) if the published button is clicked, value is set to 1
    $_POST['body'] = isset($_POST['body']);

    $post_id = update($table, $ID, $_POST);
    $_SESSION['message'] = "Post edited successfully.";
    $_SESSION['type'] = "success";
    header('location: index.php');
    exit();
    }
    else
    {
        $title = $_POST['title'];
        $body = $_POST['body'];
    }
}

// if (isset($_POST['edit-post'])) 


    // $post_id = create($table,$_POST);  //create methods always returns the id of the record it creates
    // global $conn;
    // $sql = "INSERT INTO ha ('USER_ID', 'TITLE', 'IMAGE', 'BODY', 'PUBLISHED') VALUES 
    // $stmt = $conn->prepare($sql);
    // $values = array_values($data); //  The array_values() function returns an array containing all the values of an array
    // $types = str_repeat('s',count($values));
    // $stmt->bind_param($types, ...$values);
    // $stmt->execute();
    // return $stmt;