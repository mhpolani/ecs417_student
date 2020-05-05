
<?php include('users.php'); ?>

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
  	<title>Register</title>
  </head>
  <body>
  	<header>
      <a href = "index.php" class = "logo">
  			<h1 class = "logo-text"><span>Hamza</span>Productions</h1>
        </a>
  		<i class = "fa fa-bars menu-toggle"></i>
  		<ul class = "nav">
          <li><a href = "/index.php" class = "navbar">Home</a></li>
  			<li><a href = "#">About Myself</a></li>
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

          <form action="register.php" method="post">
          <h2 class = "form-title">Register</h2>

            <!-- <div class="msg error">
                <li>Username required</li>
            </div> -->
            
          <div>
              <label>Username</label>
              <input type = "text" name = "username" class = "text-input">
          </div>
          <div>
              <label>Email</label>
              <input type = "email" name = "email" class = "text-input">
          </div>
          <div>
              <label>Password</label>
              <input type = "password" name = "password" class = "text-input">
          </div>
          <div>
              <label>Confirm Password</label>
              <input type = "password" name = "passwordConfirmation" class = "text-input">              
          </div>
          <div>
              <button type = "submit" name = "register-btn" class = "btn btn-big">Register</button>
          </div>
          <p>Or<a href = "login.php">Sign In</a></p>
          </form>
	

	<!-- JQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>  

	<!-- Custom Script -->
	<script src = "scripts.js"></script>

  </body>
  </html>
