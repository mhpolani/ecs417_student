<!-- This file adds a new blog post to the sql table -->

<?php include('posts.php');
$months = selectAll('MONTHS');
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
      <link rel = "stylesheet" href = "admin.css" type = "text/css">
      
      <!-- Reset Styling -->
	  <link rel="stylesheet" type="text/css" href="reset.css">
      
     <title>Admin Section - Add Post</title>
  </head>
  <body>
  	
      <?php include('header.php'); ?>
      
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
                <?php include('messages.php'); ?>

                 <?php if(count($errors) > 0):?>            
                <div class="msg error">
                 <?php foreach ($errors as $error): ?>
                      <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </div>    
            <?php endif; ?>       

               <form name = "myForm" id = "myForm" action="addPost.php" method = "post" onsubmit = "return check()">  
                 
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
    function checkFunction() 
        {
            
          if(confirm("Are you sure you want to clear all of the post? All unsaved changes will be lost."))
          {
            document.getElementById("myForm").reset();
          }
          else
          {            
          }
        }

    // var title = document.forms["myForm"]["title"];
    // var body = document.forms["myForm"]["body"];
    // var titleError = document.getElementById("title_error");
    // var bodyError = document.getElementById("body_error");

    const titleError = document.getElementById("title_error");
    const bodyError = document.getElementById("body_error");
    const title = document.getElementById('title');
    const body = document.getElementById('body');
    const form = document.getElementById('myForm');
    form.addEventListener('submit', (e) =>
    {
    	if(title.value === '' || title.value = null)
    	{
    	e.preventDefault()
    	title.style.border = "1px solid red";
        titleError.textContent = "Title is required!";
        title.focus();
    	}
    	if(body.value === '' || body.value = null)
    	{
    	e.preventDefault()
    	  body.style.border = "1px solid red";
          bodyError.textContent = "Body is required!";
          body.focus();
    	}
    })
    
    
    
    // title.addEventListener("click", Verify, true);
    // body.addEventListener("click", Verify, true);
    

    document.getElementById("myForm").addEventListener("click", function(event){
  event.preventDefault()
});
    function check()
    {
        if (title.value == "")
        {
            title.style.border = "1px solid red";
            titleError.textContent = "Title is required!";
            title.focus();
            return false;            
        }
        if (body.value == "")
        {   
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

  