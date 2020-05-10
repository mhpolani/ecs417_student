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
      
     <title>Admin Section - Add Post</title>
  </head>
  <body>
  	
      <?php include('adminHeader.php'); ?>
      
	  <!-- Admin Page Wrapper -->
	  <div class = "admin-wrapper">
	
      <?php include('adminSidebar.php'); ?>
            
            

            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Add Post</a>
                    <a href="postsindex.php" class = "btn btn-big">Manage Posts</a>
                </div>            
            

            <div class = "content">

                <h2 class="page-title">Add Posts</h2>
                <?php include('messages.php'); ?>

                 <?php if(count($errors) > 0):?>            
                <div class="msg error">
                 <?php foreach ($errors as $error): ?>
                      <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </div>    
            <?php endif; ?>       

               <form name = "myForm" action="create.php" method = "post" enctype = "multipart/form-data" onsubmit = "return check()">  <!-- image upload protocol -->
                   <div>
                       <label>Title</label>
                       <input id = "title" type="text" name = "title" value = "<?php echo $title ?>" class = "text-input">
                       <div id = "title_error" class = "value_error"></div>
                   </div>
                   <div>
                        <label>Body</label>
                        <textarea  name = "body" class = "body"> <?php echo $body ?></textarea>
                        <div id = "body_error" class = "value_error"></div>
                    </div> 
                    <div>
                    <label>Image</label>
                    <input type = "file" name = "image" class = "text-input">                    
                    </div>
                    
                    <div>
                    <label>
                        <input type="checkbox" name = "published">
                          Publish
                    </label>
                    </div>
                    <div> 
                        <button id = "leggo" type = "submit" name ="add-post" class = "btn btn-big">Post</button>
                    </div>
                    <div> 
                        <button onclick = "checkFunction()" name ="clear-post" class = "btn btn-big">Clear</button>
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

    <script>
    // function checkFunction() 
    //     {
            
    //       if(confirm("Are you sure you want to clear all of the post? All unsaved changes will be lost."))
    //       {
    //         document.getElementById("title").innerHTML = "";
    //         document.getElementById("body2").innerHTML = "";
    //       }
    //       else
    //       {
    //         document.getElementById("title").innerHTML = "<?php echo $title ?>";
    //         document.getElementById("body2").innerHTML = "<?php echo $body ?>";
    //       }
    //     }

    var title = document.forms["myForm"]["title"];
    var body = document.forms["myForm"]["body"];
    var titleError = document.getElementById("title_error");
    var bodyError = document.getElementById("body_error");
    title.addEventListener("click", Verify, true);
    body.addEventListener("click", Verify, true);
    
    function check()
    {
        if (title.value == "")
        {
            window.alert("I was called.");
            title.style.border = "1px solid red";
            titleError.textContent = "Title is required!";
            title.focus();
            return false;            
        }
        if (body.value == "")
        {
            window.alert("I was called.");
            body.style.border = "1px solid red";
            bodyError.textContent = "Body is required!";
            body.focus();
            return false;            
        }
        
    }
    
    function titleVerify()
    {
        if(title.value != "")
        {
            title.style.border = "1px solid green";
            titleError.innerHTML = "";
            return true;
        }
    }

    function bodyVerify()
    {
        if(body.value != "")
        {
            body.style.border = "1px solid green";
            bodyError.innerHTML = "";
            return true;
        }
    }
    
        </script>

  </body>
  </html>
