<!-- This file acts as the preview page. Includes edit post, view posts and publish posts functionality -->
<?php include('posts.php'); //included to get functionality of db.php for reusable functions

if (isset($_GET['ID']))
{
	$post = selectOne('POSTS',['ID' => $_GET['ID']]); //fetch post clicked from index and display fetched post on preview.php
}

$posts = selectAll('POSTS', ['published' => 1]);


?>
<!DOCTYPE html>
 <html lang = "en">
  <head>
  	<meta charset = "UTF-8">
  	<meta charset = "viewport" content = "width-device-width,initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content = "ie-edge">
      
  	<!-- Font Awespme -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"/>
      
    <!--  Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap" rel="stylesheet">
            
    <!-- Custom styling -->
      <link rel = "stylesheet" href = "blog.css" type = "text/css">
      
      <!-- Reset Styling -->
      <link rel="stylesheet" type="text/css" href="reset.css">
      
  	<title><?php echo $post['title']; ?> | HamzaMan</title>
  </head>
  <body>
  <?php include('header.php'); ?>  <!-- code for including navbar -->
	  <!-- Page Wrapper -->
	  <div class = "page-wrapper">
				  
		  <!-- Content -->
		  <div class="content clearfloats">

                <!-- Main Content -->
                
                <div class="Pbutton-group">
                    <a href="edit.php?ID=<?php echo $post['ID']?>" class="btn btn-big">Edit Post</a>
                    <a href="postsindex.php" class = "btn btn-big">Manage Posts</a>
                    <?php if($post['published']):?>
                                <a class = "btn btn-big" href="edit.php?published=0&p_id=<?php echo $post['ID']?>" class = "unpublish">Unpublish</a>  <!-- changes the state of the published field -->                                                
                            <?php else: ?>
                                <a  class = "btn btn-big" href="edit.php?published=1&p_id=<?php echo $post['ID']?>" class = "publish">Publish</a>    <!-- i.e lets the user preview the entry and then publish it -->                                                
                            <?php endif; ?>    
                 </div>            


			  <div class="main-content preview">
			<h1 class="post-title">
			<?php echo $post['title']; ?> (FOR PREVIEWING PURPOSES ONLY. If you wish to edit the post please copy the body of the post as it will be lost.)
			</h1>
			<div class="class post-content">
					<p>
					<?php echo ($post['body']) ?>
					</p>
			</div>

            <div class="admin-content">

                
			  </div>			  
			  <!-- End of Main COntent -->
			  
		  </div>
		  <!-- End of Content -->
       </div>
	  <!-- End of page Wrapper -->

	  <!-- Footer -->
		   <div class = "footer">  

			<div class = "footer-content">  

			
			<div class = "footer-section about">
					<h1 class = "logo-text" href = "index.php"><span>Hamza</span>Man</h1>
					<p></p>
					<div class = "contact">
						<span><i class="fas fa-mobile-alt"></i> &nbsp; +44 1234 56789</span>
						<span><i class="fas fa-paper-plane"></i> info@mhpolanto.com</span>  
					</div>
					<div class = "socials">
						<a href = "#"><i class="fab fa-facebook-square"></i></a>						
						<a href = "#"><i class="fab fa-linkedin"></i></a>
						<a href = "#"><i class="fab fa-instagram"></i></a>
						<a href = "#"><i class="fab fa-whatsapp-square"></i></a>						
					</div>
				
				</div>
							
				<div class = "footer-section links">
					<h2>Links</h2>
					<br>
					<ul class = "footer-list">					  
					  <li><a href = "index.php">About Me</a></li>
					  <li><a href = "index.php">Skills and Achievements</a></li>
	     			  <li><a href = "index.php">Education and Qualifications</a></li>					  
					  <li><a href = "index.php">Portfolio</a></li>
					  <li><a href = "index.php">Contact</a></li>
					  <li><a href = "viewBlog.php">Blog</a></li>	
					</ul>					
				</div>
                
				<div class = "footer-section contact-form">
					<h2>Contact me!</h2>
					<br>
					<form action = "viewBlog.php" method = "post">
						<input type = "email" name = "email" class = "text-input contact-input" placeholder = "Your email address...">
						<textarea rows = "4" name = "message" class = "text-input contact-input" placeholder = "Your message...."></textarea>
						<button type="submit" class="btn btn-big contact-btn">
							<i class="fas fa-envelope"></i>
							Send
						</button>

						</form>
				</div>
			
			</div>			 

			<div class = "footer-bottom">
				&copy; PolaniTechStyle.com | Designed by Muhammad Hamza Polani	
			  </div>


		  </div>  

	  <!-- End of footer -->
	  
	<!-- JQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>  

	<!-- SLICK Carousel -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

	<!-- Custom Script -->
	<script src = "scripts.js"></script>

  </body>
  </html>
