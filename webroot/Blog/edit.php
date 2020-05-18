<?php include('posts.php'); 

?>
<!DOCTYPE html>
 <html lang = "en">
  <head>
  	<meta charset = "UTF-8">
  	<meta charset = "viewport" content = "width-device-width,initial-scale=1.0">
  	<meta http-equiv="X-UA-Compatible" content = "ie-edge">
  	
  	<!-- Font Awesome -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"/>

    <!--  Google fonts -->
    
	<link href="https://fonts.googleapis.com/css2?family=Candal&family=Raleway&display=swap" rel="stylesheet">
	
	<!-- Custom Styling -->
      <link rel = "stylesheet" href = "blog.css" type = "text/css">
      
    <!-- Custom Styling -->
    <link rel = "stylesheet" href = "admin.css" type = "text/css">
    
    <!-- Reset Styling -->
	  <link rel="stylesheet" type="text/css" href="reset.css">
      
     <title>Edit Posts</title>
  </head>
  <body>
  	
      <?php include('header.php'); ?>   <!-- code for including navbar -->
      
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

                <h2 class="page-title">Edit Post</h2>
                <?php include('messages.php'); ?>

               <form action="edit.php" method = "post">
               
               <input type="hidden" name = "ID" value = "<?php echo $ID ?>" > <!-- sends id to update to posts.php -->
               
               <div>
                       <label>Title</label>
                       <input type="text" name = "title" value = "<?php echo $title ?>" class = "text-input">
                   </div>

                   <div>
                        <label>Body</label>
                        <textarea name = "body" class = "body">
                        <?php echo $body ?>
                      </textarea>
                    </div> 
                                             
                    <div>
                    <label>
                        <input type="checkbox" name = "published">
                          Publish
                    </label>
                    </div>

                    <div> 
                        <button type = "submit" name = "edit-post" class = "btn btn-big">Update Post</button>
                    </div>

               </form>

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
 