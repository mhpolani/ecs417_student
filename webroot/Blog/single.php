<?php include_once('posts.php'); //included to get functionality of db.php for reusable functions

if (isset($_GET['ID']))
{
	$post = selectOne('POSTS',['ID' => $_GET['ID']]); //fetch post clicked from index and display fetched post on single.php
}

// $posts = selectAll('POSTS', ['published' => 1]);

// include('comment.php');

if (isset($_POST['add-comment']))  
{    
    unset($_POST['add-comment']); 
	$_POST['USER_ID'] = $_SESSION['ID'];
	$comment_id = $_POST['USER_ID'];
	$comment_body = $_POST['body'];
	dd($_POST);
	// $_SESSION['message'] = "Comment added successfully.";
	// $_SESSION['type'] = "success";	
	// global $conn;
	// $sql = "INSERT INTO COMMENTS (USER_ID, body) VALUES ('$comment_id' , '$comment_body')";
    // $stmt = $conn->prepare($sql);
	// $stmt->execute();
    // $id = $stmt->insert_id;   //grab the id of the record generated in the last query
	// dd($id);
	// dd($comment_id);
	// dd($comment_body);
	
    // $_POST['published'] = isset($_POST['published']) ? 1 : 0;    //Since the 'published' is of type tinyint(boolean) if the published button is clicked, value is set to 1
    // $_POST['body'] = htmlentities($_POST['body']);
    // $post_id = create($table,$_POST);
    // $_SESSION['message'] = "Comment added successfully.";
    // $_SESSION['type'] = "success";
    // header('location: postsindex.php');
    
    // else
    // {
    //     $title = $_POST['title'];
    //     $body = $_POST['body'];
	// }		
}

?>
<!DOCTYPE html>
 <html lang = "en">
  <head>
  	<meta charset = "UTF-8">
  	<meta charset = "viewport" content = "width-device-width,initial-scale=1.0">
	  <meta http-equiv="X-UA-Compatible" content = "ie-edge">
	  
  	<!-- Font Awespme -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"/>
	  
    <!-- Google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap" rel="stylesheet">
	
		<!-- Custom Styling -->
	  <link rel = "stylesheet" href = "blog.css" type = "text/css">
	  
	  <!-- Reset Styling -->
	  <link rel="stylesheet" type="text/css" href="reset.css">
  	<title><?php echo $post['title']; ?> | HamzaMan</title>
  </head>
  <body>
  <?php include('header.php'); ?>
	  <!-- Page Wrapper -->
	  <div class = "page-wrapper">
				  
		  <!-- Content -->
		  <div class="content clearfloats">

				<!-- Main Content -->
			  <div class="main-content single">
			<h1 class="post-title">
			<?php echo $post['title']; ?> 
			</h1>
			<div class="class post-content">
					<p>
					<?php echo ($post['body']) ?>
					</p>
			</div>

			<div>
				  <form action = "single.php" method = "post">						
						<textarea rows = "4" name = "message" class = "text-input contact-input" placeholder = "Your comment...."></textarea>
						<button type="submit" name = "add-comment" class="btn btn-big contact-btn">
							<i class="fas fa-envelope"></i>
							Add Comment
						</button>
					</form>
					<div>

			  </div>			  
			  <!-- End of Main COntent -->
			  <!-- SideBar -->
			    <!-- <div class = "sidebar single"> 

				   <div class="section trending">
					  <h2 class="section-title">Popular</h2>	

						<?php foreach($posts as $p): ?>
					  <div class="post clearfloats">

						  <img src="Images/wooh.png" alt="">
						  <a href = "" class = "title">
						  <h4><?php echo $p['title'] ?></h4>
						  </a>
					  </div>			
					  <?php endforeach;?>					 -->

				  </div>   

				  <!-- <div class = "section topics">
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
				  </div> -->
				  
			
			  </div> 
			  	<!-- End of SideBar -->
		  </div>
		  <!-- End of Content -->
       </div>
	  <!-- End of page Wrapper -->

	  <!-- Footer -->
		   <div class = "footer">  <!--x -->

			<div class = "footer-content">  <!-- y -->

				<div class = "footer-section about">
					<h1 class = "logo-text"><span>Hamza</span>Man</h1>
					<p>Enter filler content here</p>
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
					<ul class = "footer-list">
					<li><a href = "#">About Me</a></li>
						  <li><a href = "#">Skills and Achievements</a></li>
						  <li><a href = "#">Education and Qualifications</a></li>						
						  <li><a href = "#">Portfolio</a></li>
						  <li><a href = "#">Contact</a></li>
						  <li><a href = "#">Blog</a></li>					
				</div>
				<div class = "footer-section contact-form">
					<h2>Contact us</h2>
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
