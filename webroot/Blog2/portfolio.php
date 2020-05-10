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

			<div class = "post-slider">

			<h1 class = "portfolio-title">Muhammad Hamza Polani</h1>
			<i class = "fas fa-chevron-left prev"></i>
			<i class = "fas fa-chevron-right next"></i>
			
			<div class = "post-wrapper">
		
				
<div class = "post">
		<img src = "Images/guy.png" alt = " " class = "Pslider-image">
		<div class = "post-info">
	  <h4><a href = "single.php?ID=<?php echo $post['ID']; ?>">About Myself</a></h4>
	  <i class = "far fa-user"></i> 
	  <p class = "posttext">
	  Since writing my first program in Java, I have been possessed with the idea of using software to solve practical problems. I have a strong conviction in the power of programming to develop the lives of people everywhere.
	  </p>
	  <!-- <i class = "far fa-user"></i> -->
	  &nbsp;
	  <i class = "far fa-calendar">April 3, 2020</i>	  
		</div>
</div> 

<div class = "post">
		<img src = "Images/qual.jpeg" alt = " " class = "Pslider-image">
		<div class = "post-info">
	  <h4><a href = "single.php?ID=<?php echo $post['ID']; ?>">Skills & Achievements</a></h4>
	  <i class = "far fa-user"> </i>
	  <p class = "posttext">
		Over the span of the last ten years, I have attained several awards in the fields of sports, debating
	  </p>
	  &nbsp;
	  <i class = "far fa-calendar">April 3, 2020</i>	  
		</div>
</div> 
<div class = "post">
		<img src = "Images/kgs.png" alt = " " class = "Pslider-image">
		<div class = "post-info">
	  <h4><a href = "single.php?ID=<?php echo $post['ID']; ?>">Education & Qualifiations</a></h4>
	  <i class="fas fa-brain"></i>
	  <p class = "posttext">I am currently studying Computer Science with Management at the Queen Mary University of London. I had the pleasure of completing my A-levels from Karachi Grammar School in 2018 and my GCSEs from Bahria College Karachi in 2016.</p>
	  &nbsp;
	  <i class = "far fa-calendar">April 3, 2020</i>	  
		</div>
</div> 

<div class = "post">
		<img src = "Images/links.png" alt = " " class = "Pslider-image">
		<div class = "post-info">
	  <h4><a href = "single.php?ID=<?php echo $post['ID']; ?>">Portfolio & Links</a></h4>
	  <i class="fas fa-pen-fancy"></i>
	  <p class = "posttext">
	  Below you can find a link that will redirect you to an article I co-authored for a renowned medical journal while this you can look at my CV <a href = "CV.pdf"> here </a>.
		<a href = "https://www.cureus.com/articles/12863-knowledge-attitudes-and-practices-among-nurses-in-pakistan-towards-diabetic-foot?utm_medium=email&utm_source=transaction">Knowledge, Attitudes, and Practices Among Nurses in Pakistan Towards Diabetic Foot</a>
	 </p>
	  &nbsp;
	  <i class = "far fa-calendar">April 3, 2020</i>	  
		</div>
</div> 

<div class = "post">
		<img src = "Images/blog.png" alt = " " class = "Pslider-image">
		<div class = "post-info">
	  <h4><a href = "single.php?ID=<?php echo $post['ID']; ?>">The tales of HamzaMan</a></h4>
	  <i class="fas fa-book"></i>
	  <p class = "posttext">
	  My personal blog. Includes articles and essays I have written since I was a young child. 
	  </p>
	  &nbsp;
	  <i class = "far fa-calendar">April 3, 2020</i>	  
		</div>
</div> 
		
<div class = "post">
		<img src = "Images/contact.jpeg" alt = " " class = "Pslider-image">
		<div class = "post-info">
	  <h4><a href = "single.php?ID=<?php echo $post['ID']; ?>">Contact me!</a></h4>
	  <i class="fas fa-address-book"></i>
	  <p class = "posttext">
	  You can contact me through any of my social media pages that can be found on the footer of this page. Alternatively, you can fill out the contact form on this website and one of my team members will get back to you via email.
	  </p>
	  &nbsp;
	  <i class = "far fa-calendar">April 3, 2020</i>	  
		</div>
</div> 
		 
<div class = "post">
		<img src = "Images/ac.png" alt = " " class = "Pslider-image">
		<div class = "post-info">
	  <h4><a href = "single.php?ID=<?php echo $post['ID']; ?>">Hobbies & Interests</a></h4>
	  <i class="fas fa-dumbbell"></i>
	  <p class = "posttext">
	  In my spare time, I am a weightlifting and driving enthusiast. Squash, DC comics, fiction books and first person shooter games are also a few of the things I am an avid fan of.
	  </p>
	  &nbsp;
	  <i class = "far fa-calendar">April 3, 2020</i>	  
		</div>
</div> 

      </div>      
		</div>

	  
		  
		  <!-- Content -->
		  <div class="content clearfloats">

				<!-- Main Content -->
				<p class = "aboutme"  >
			 
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
					<p></p>
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
