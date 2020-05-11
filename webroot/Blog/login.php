<?php include('users.php');


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

          <!-- Custom Styling -->
    <link rel = "stylesheet" href = "blog.css" type = "text/css">
    
    <!-- Reset Styling -->
    <link rel="stylesheet" type="text/css" href="reset.css">
    
  	<title>Log in</title>
  </head>
  <body>
  <?php include('header.php'); ?>

      <div class="author-content">
           
          <form action="login.php" method="post">
          <h2 class = "form-title">Login</h2>

            <?php if(count($errors) > 0):?>            
                <div class="msg error">
                 <?php foreach ($errors as $error): ?>
                      <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </div>    
            <?php endif; ?>       

          <div>
              <label>Username</label>
              <input type = "text" name = "username" value = "<?php echo $username; ?>" class = "text-input">
          </div>
          
          <div>
              <label>Password</label>
              <input type = "password" name = "password" value = "<?php echo $password; ?>" class = "text-input">
          </div>
          <div>
              <button type = "submit" name = "login-btn" class = "btn btn-big">Login</button>
          </div>
          <p><a href = "<?php echo 'register.php' ?>">Sign Up</a></p>
          </form>
	

	<!-- JQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>  

	<!-- Custom Script -->
	<script src = "scripts.js"></script>

  </body>
  </html>
