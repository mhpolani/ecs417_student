<!-- This file contains HTML markup code for all files that include the NAVBAR in the header such as index.php, portfolio.php, login.php etc -->

<header>
  		<a class = "logo" href = "<?php echo 'index.php'?>" >
  			<h1 class = "logo-text"><span>Hamza</span>Man</h1>
  		</a>
  		<i class = "fa fa-bars menu-toggle"></i>
  		<ul class = "nav">
		  <?php if (isset($_SESSION['ID'])): ?>     <!-- This makes sure that the navbar displays the username of the currently logged in user -->
  				<li>
				<a href = "#">
					<i class="fas fa-user-tie"></i>
					<?php echo $_SESSION['username']; ?>
					<i class="fas fa-angle-double-down" style = "font-size:.8em"></i>
				</a>
				<ul>
				<li><a href = "<?php echo 'logout.php'; ?>" class = "logout">Logout</a></li>
			 </ul>
  			</li>
		  <?php endif; ?>
  		</ul>
      </header>