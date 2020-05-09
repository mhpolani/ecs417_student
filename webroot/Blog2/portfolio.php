<?php 

include('db.php');
$posts = selectAll('POSTS', ['published' => 1]);  //fetching only published posts

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
  	<title>Portfolio</title>
  </head>
  <body>
  <?php include('header.php'); ?>
  <?php include('messages.php'); ?>	


	  <!-- Page Wrapper -->
	  <div class = "page-wrapper">
		
	  
		  
		  <!-- Content -->
		  <div class="content clearfloats">

				<!-- Main Content -->
			 
			  <!-- End of Main COntent -->
			  <div class = "sidebar">
				  <div class = "section search">
					  <h2 class = "section-title">Search</h2>
					  <form action = "index.html" method = "post">
						  <input type = "text" name = "search-term" class = "text-input" placeholder = "Search....">						   
					  </form>
				  </div>

				  <div class = "section topics">
					  <h2 class = "section-title">Topics</h2>
					  <ul>
						
						  <li><a href = "#">About Me</a></li>
						  <li><a href = "#">Skills and Achievements</a></li>
						  <li><a href = "#">Education and Qualifications</a></li>
						  <li><a href = "#">Experience</a></li>
						  <li><a href = "#">Portfolio</a></li>
						  <li><a href = "#">Contact</a></li>
						  <li><a href = "#">Blog</a></li>
					  </ul>
				  </div>
			  </div>

		  </div>
		  <!-- End of Content -->
		</div>
	  <!-- End of page Wrapper -->

	  <!-- Footer -->
		   <div class = "footer">  <!--x -->

			<div class = "footer-content">  <!-- y -->

				<div class = "footer-section about">
					<h1 class = "logo-text"><span>Hamza</span>Man</h1>
					<p>Enter filler content for footer here</p>
					<div class = "contact">
						<span><i class ="fas fa-phone"></i></span> &nbsp; 123-456-789</span>
						<span><i class = "fas fa-envelope"></i> &nbsp; info@Mhpolanto.com</span>
					</div>
					<div class = "socials">
						<a href = "#"><i class = "fab fa-facebook"></i></a>
						<a href = "#"><i class = "fab fa-youtube"></i></a>
						<a href = "#"><i class = "fab fa-instagram"></i></a>
						<a href = "#"><i class = "fab fa-twitter"></i></a>						
					</div>
				
				</div>
				
				<div class = "footer-section links">
					<h2>Quick Links</h2>
					<br>
					<ul>
						<a href = "#"><li>About Me</li></a>
						<a href = "#"><li>Skills and Achievements</li></a>
						<a href = "#"><li>Education and Qualifications</li></a>
						<a href = "#"><li>Experience</li></a>
						<a href = "#"><li>Portfolio</li></a>
						<a href = "#"><li>Contact</li></a>
						<a href = "#"><li>Blog</li></a>
					
				</div>
				<div class = "footer-section contact-form">
					<h2>Contact me</h2>
					<br>
					<form action = "index.php" method = "post">
						<input type = "email" name = "email" class = "text-input contact-input" placeholder = "Your email address...">
						<textarea rows = "4" name = "message" class = "text-input contact-input" placeholder = "Your message...."></textarea>
						<button type="submit" class="btn btn-big contact-btn">
							<i class="fas fa-envelope"></i>
							Send
						</button>

						</form>

					</form>
				</div>
			
			</div>			 <!-- y -->

			  <div class = "footer-bottom">
				&copy; PolaniTex.com | Designed by Hamza Polani	
			  </div>

		  </div>  <!--x -->
	  <!-- End of footer -->
	<!-- JQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>  

	<!-- SLICK Carousel -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

	<!-- Custom Script -->
	<script src = "scripts.js"></script>

  </body>
  </html>
