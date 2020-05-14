<header>
      <a href = "viewBlog.php" class = "logo">
  			<h1 class = "logo-text"><span>Hamza</span>Man</h1>
        </a>
  		<i class = "fa fa-bars menu-toggle"></i>
  		<ul class = "nav">
  			<li><a href = "index.php" class = "navbar">Portfolio</a></li>
  			<li><a href = "viewBlog.php" class = "navbar">Blog</a></li>
			
			<?php if(isset($_SESSION['ID'])): ?>
			
			<li>
				<a href = "#">					
					<i class="fas fa-user-secret"></i>
					<?php echo $_SESSION['username']; ?>
					<i class="fas fa-angle-double-down" style = "font-size:.8em"></i>
				</a>
				<ul>
					<?php if($_SESSION['admin']): ?>   <!-- only the admin can see the option to go the dashboard page -->
				<li><a href = "<?php echo 'dashboard.php' ?>">Dashboard</a></li>  
					<?php endif; ?>

				<li><a href = "<?php echo 'logout.php' ?>" class = "logout">Logout</a></li>
			 </ul>
  		</li>

			<?php else: ?>
			<li><a href = "<?php echo 'register.php' ?>"> Sign Up </a></li>
			<li><a href = "<?php echo 'login.php' ?>"> Login </a></li>
			
			<?php endif; ?>

  		</ul>
	  </header>

	  