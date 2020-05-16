<?php include('posts.php'); 
 
?>
<!DOCTYPE html>
 <html lang = "en">
  <head>
  	<meta charset = "UTF-8">
  	
  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"/>

    <!--  Google fonts -->
    
	<link href="https://fonts.googleapis.com/css2?family=Candal&family=Raleway&display=swap" rel="stylesheet">
	
	<!-- Custom Styling -->
      <link rel = "stylesheet" href = "blog.css" type = "text/css">
      
    <!-- Custom Styling2 -->
      <link rel = "stylesheet" href = "admin.css" type = "text/css">
      
      <!-- Reset Styling -->
	  <link rel="stylesheet" type="text/css" href="reset.css">
      
     <title>Admin Section - Manage Posts</title>
  </head>
  <body>

  <?php include("header.php"); ?>
      
	  <!-- Admin Page Wrapper -->
	  <div class = "admin-wrapper">

      
      <div class="left-sidebar">
                <ul>
                    <li><a href="postsindex.php">Manage Posts</a></li>  
                </ul>
            </div>
      
	
       
            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="addPost.php" class="btn btn-big">Add Post</a>
                    <a href="postsindex.php" class = "btn btn-big">Manage Posts</a>
                </div>            
            

            <div class = "content">
                <h2 class="page-title">Manage Posts</h2>

                <?php include('messages.php'); ?>

                <table>
                    <thead>
                        <th>#</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th  colspan = "4">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($posts as $key => $post): ?>
                        <tr>
                            <td><?php echo $key + 1; ?></td>
                            <td><?php echo $post['title'] ?></td>
                            <td>Hamza</td>
                            <td><a href="edit.php?ID=<?php echo $post['ID']; ?> " class = "edit">Edit</a></td>            <!-- redirects the user to edit.php.  -->                                                
                            <td><a href="preview.php?ID=<?php echo $post['ID']?>" class = "preview">Preview</a></td>      <!-- redirects user to the preview page where they can click the publish button if they wish to post it after reviewing it -->                                                
                            <td><a href="edit.php?delete_id=<?php echo $post['ID']; ?> " class = "delete">Delete</a></td>   <!-- calls the deleted function in posts.php -->                                                
                            <?php if($post['published']):?>
                                <td><a href="edit.php?published=0&p_id=<?php echo $post['ID']?>" class = "unpublish">Unpublish</a></td>
                            <?php else: ?>
                                <td><a href="edit.php?published=1&p_id=<?php echo $post['ID']?>" class = "publish">Publish</a></td>
                            <?php endif; ?>    
                            
                        </tr> 
                            <?php endforeach; ?>
                         

                    </tbody>
                </table>
            </div>
      </div>


            <!-- End of Admin Content -->
		  
	</div>
	  <!-- End of page Wrapper -->
	  
	<!-- JQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>  

	<!-- Custom Script -->
	<script src = "scripts.js"></script>

  </body>
  </html>


  <!-- <td><a href="edit.php?ID=<?php echo $post['ID']; ?> " class = "edit">Edit</a></td> -->