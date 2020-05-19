<?php 

include('db.php');
$posts = selectAll('POSTS', ['published' => 1]);  //fetching only published posts. NOT USED

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
		
		<!-- Reset Styling -->
	<link rel="stylesheet" type="text/css" href="reset.css">
	
  	<title>Portfolio</title>
  </head>
  <body>
  <?php include('header.php'); ?>   <!-- code for including navbar -->
  <?php include('messages.php'); ?>	 <!--error/success messages prompt-->


	  <!-- Page Wrapper -->
	  <div class = "page-wrapper">

			<div class = "post-slider">

			<h1 class = "portfolio-title">Muhammad Hamza Polani</h1>
			<i class = "fas fa-chevron-left prev"></i>
			<i class = "fas fa-chevron-right next"></i>
			<div class = "post-wrapper">
		
				
<div class = "post">
		<figure>
		<img src = "Images/guy.png" alt = " " class = "Pslider-image">
		</figure>
		<div class = "Ppost-info">
	  <h4><a href = "" >About Myself</a></h4>
	  <i class="fas fa-user-secret"></i>&nbsp;
	  <p class = "posttext">
	  Since writing my first program in Java, I have been possessed with the idea of using software to solve practical problems. I possess a strong conviction in the power of programming to develop the lives of people everywhere. Keenly interested in data analytics and tech auditing, I aspire to either be a data scientist or delve into FinTech.
	  </p>
	  <!-- <i class = "far fa-user"></i> -->
	  	  
		</div>
</div> 

<div class = "post">
		<figure>
		<img src = "Images/qual.jpeg" alt = " " class = "Pslider-image">
		</figure>
		<div class = "Ppost-info">
	  <h4><a href = "" >Skills & Achievements</a></h4>
	  <i class="fas fa-trophy"></i>
	  <p class = "posttext">
		Over the span of the last ten years, I have attained several awards in the fields of sports, debating and volunteering. Alongside this, I have consistently managed to hold student government positions. I can program in Java and Python, along with having a grasp on HTML, CSS, JS and PHP. I speak English and Urdu.
	  </p>
	  	  
		</div>
</div> 
<div class = "post">
		<figure>
		<img src = "Images/kgs.png" alt = " " class = "Pslider-image">
		</figure>
		<div class = "Ppost-info">
	  <h4><a href = "" >Education & Qualifiations</a></h4>
	  <i class="fas fa-brain"></i> 
	  <p class = "posttext">I am currently studying Computer Science with Management at the Queen Mary University of London. I had the pleasure of completing my A-levels from Karachi Grammar School in 2018 and my GCSEs from Bahria College Karachi in 2016.</p>
	  	  
		</div>
</div> 

<div class = "post">
		<figure>
		<img src = "Images/links.png" alt = " " class = "Pslider-image">
		</figure>
		<div class = "Ppost-info">
	  <h4><a href = "" >Portfolio & Links</a></h4>
	  <i class="fas fa-pen-fancy"></i> 
	  <p class = "posttext">
	  Below you can find a link that will redirect you to an article I co-authored for a renowned medical journal while this you can look at my CV <a href = "CV.pdf"> here </a>.
		               <a href = "https://www.cureus.com/articles/12863-knowledge-attitudes-and-practices-among-nurses-in-pakistan-towards-diabetic-foot?utm_medium=email&utm_source=transaction">Knowledge, Attitudes, and Practices Among Nurses in Pakistan Towards Diabetic Foot</a>
	 </p>
	  	  
		</div>
</div> 

<div class = "post">
		<figure>
		<img src = "Images/blog.png" alt = " " class = "Pslider-image">
		</figure>
		<div class = "Ppost-info">
	  <h4><a href = "" >The tales of HamzaMan</a></h4>
	  <i class="fas fa-book"></i> 
	  <p class = "posttext">
	  My personal blog. The Tales of HamzaMan includes articles and essays I have written since I was a young child. These cover a wide spectrum of topics, including but not limited to, politics, religion, the environment and random thoughts.
	  </p>
	  	  
		</div>
</div> 
		
<div class = "post">
		<figure>
		<img src = "Images/contact.jpeg" alt = " " class = "Pslider-image">
		</figure>
		<div class = "Ppost-info">
	  <h4><a href = "" >Contact me!</a></h4>
	  <i class="fas fa-address-book"></i> 
	  <p class = "posttext">
	  You can contact me through any of my social media pages that can be found on the footer of this page. Alternatively, you can fill out the contact form on this website and one of my team members will get back to you via email.
	  </p>
	  	  
		</div>
</div> 
		 
<div class = "post">
		<figure>
		<img src = "Images/ac.png" alt = " " class = "Pslider-image">
		</figure>
		<div class = "Ppost-info">
	  <h4><a href = "" >Hobbies & Interests</a></h4>
	  <i class="fas fa-dumbbell"></i> 
	  <p class = "posttext">
	  In my spare time, I am a weightlifting and driving enthusiast. Squash, DC comics, fiction books and first person shooter games are also a few of the things I am an avid fan of.                                                      
	  </p>
	  	  
		</div>
</div> 

      </div>      
		</div>
	  		  
		  <!-- Content -->
		  <div class="content clearfloats">

				<!-- Main Content -->
				<p class = "aboutme"  >
			 
			  <!-- End of Main COntent -->			 

		  </div>
		  <!-- End of Content -->
		</div>
	  <!-- End of page Wrapper -->

	  <!-- Footer -->
	  <footer>
		   <div class = "footer"> 

			<div class = "footer-content">  <!-- y -->
				
				<div class = "footer-section about">
					<h1 class = "logo-text" href = "index.php"><span>Hamza</span>Man</h1>
					<p></p>
					<div class = "contact">
						<span><i class="fas fa-mobile-alt"></i> &nbsp; +44 1234 56788 </span>
						<span><i class="fas fa-paper-plane"></i> info@mhpolanto.com</span>  
					</div>
					<div class = "socials">
						<a href = "facebook.com"><i class="fab fa-facebook-square"></i></a>						
						<a href = "linkedin.com"><i class="fab fa-linkedin"></i></a>
						<a href = "instagram.com"><i class="fab fa-instagram"></i></a>
						<a href = "whatsapp.com"><i class="fab fa-whatsapp-square"></i></a>						
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

					</form>
				</div>
			
			</div>			

			  <div class = "footer-bottom">
				&copy; PolaniTechStyle.com | Designed by Muhammad Hamza Polani	
			  </div>

		  </div> 
		  
		  </footer>
	  <!-- End of footer -->
	<!-- JQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>  

	<!-- SLICK Carousel -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

	<!-- Custom Script -->
	<script src = "scripts.js"></script>

  </body>
  </html>
