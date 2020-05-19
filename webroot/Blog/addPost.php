<!-- This file adds a new blog post to the sql table and to the website itself -->

<?php include('posts.php');
$months = selectAll('MONTHS');   //the months database is basically just a table that has all the names of the months lol
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
      
    <!-- Custom Styling -->
      <link rel = "stylesheet" href = "admin.css" type = "text/css">    <!-- Seperate styling for admin pages such as postsindex.php, addPost.php and edit.php -->
      
      <!-- Reset Styling -->
	  <link rel="stylesheet" type="text/css" href="reset.css">
      
     <title>Add Post</title>
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
                    <a href="create.php" class="btn btn-big">Add Post</a>
                    <a href="postsindex.php" class = "btn btn-big">Manage Posts</a>
                </div>            
            

            <div class = "content">

                <h2 class="page-title">Add Posts</h2>
                <?php include('messages.php'); ?>   <!--error/success messages prompt-->

                 <?php if(count($errors) > 0):?>            
                <div class="msg error">
                 <?php foreach ($errors as $error): ?>
                      <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </div>    
            <?php endif; ?>       

               <form name = "myForm" id = "myForm" action="addPost.php" method = "post" >  
                 
                  <div>
                       <label>Title</label>
                       <input id = "title" type="text" name = "title" value = "" class = "text-input">
                       <div id = "title_error" class = "value_error"></div>
                   </div>
                 
                   <div>
                        <label>Body</label>
                        <textarea id = "body" name = "body" class = "body"></textarea>
                        <div id = "body_error" class = "value_error"></div>
                    </div>
                    <div>
                        <label>Month of Release</label>       
                        <select name = "month" class = "text-input">
                        <?php foreach($months as $key => $month): ?>
                            <option value = "<?php echo $month['name'] ?>"><?php echo $month['name'] ?></option>   
					    <?php endforeach; ?>
                    </div>
                    <div>
                    <label>
                        <input type="checkbox" name = "published">
                          Publish
                    </label>
                    </div>

                    <div> 
                        <button id = "add-post" type = "submit" name = "add-post" class = "btn btn-big">Post</button>
                    </div>

                    <div> 
                        <button type = "reset" onclick = "return check()" name ="clear-post" class = "btn btn-big">Clear Post</button>  <!-- the check function is present in test.js which adds event processing for the clear button --> 
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
	<script src = "test.js"></script>
    

  </body>
  </html>

  