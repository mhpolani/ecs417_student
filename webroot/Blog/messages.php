<!--This file bascially adds error/success prompts to different instances like user login, registeration-->

<?php if(isset($_SESSION['message'])): ?>
	  <div class="msg <?php echo $_SESSION['type']; ?>">
	  <li><?php echo $_SESSION['message'];?></li>
	  <?php 
		 unset($_SESSION['message']);     //This will remove the login message once the users sees it
		 unset($_SESSION['type']);         
	  ?>
	  </div>
<?php endif; ?>