<?php include("path.php")?>
<!DOCTYPE html>
 <html lang = "en">
  <head>
  	<meta charset = "UTF-8">
  	<meta charset = "viewport" content = "width-device-width,initial-scale=1.0">
  	<meta http-equiv="X-UA-Compatible" content = "ie-edge">
  	<!-- Font Awespme -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"/>
    <!-- 5- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap" rel="stylesheet">
  	<link rel = "stylesheet" href = "blog.css" type = "text/css">
  	<title>Log in</title>
  </head>
  <body>
  	<header>
      <a href = "index.php" class = "logo">
  			<h1 class = "logo-text"><span>Hamza</span>Productions</h1>
        </a>
  		<i class = "fa fa-bars menu-toggle"></i>
  		<ul class = "nav">
          <li><a href = "/index.php" class = "navbar">Home</a></li>
  			<li><a href = "#">About</a></li>
  			<li><a href = "#">Services</a></li>
			<li>
				<a href = "#">
					<i class="fas fa-user-tie"></i>
					Hamza Polani
					<i class="fas fa-angle-double-down" style = "font-size:.8em"></i>
				</a>
				<ul>
				<li><a href = "#">Dashboard</a></li>
				<li><a href = "#" class = "logout">Logout</a></li>
			 </ul>
  		</li>
  		</ul>
	  </header>

      <div class="author-content">

          <form action="register.html" method="post">
          <h2 class = "form-title">Login</h2>

          <div>
              <label>Username</label>
              <input type = "text" name = "username" class = "text-input">
          </div>
          
          <div>
              <label>Password</label>
              <input type = "password" name = "password" class = "text-input">
          </div>
          <div>
              <button type = "submit" name = "login-btn" class = "btn btn-big">Login</button>
          </div>
          <p><a href = "register.php">Sign Up</a></p>
          </form>
	

	<!-- JQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>  

	<!-- Custom Script -->
	<script src = "scripts.js"></script>

  </body>
  </html>
