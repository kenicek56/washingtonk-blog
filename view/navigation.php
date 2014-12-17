<?php
//DIR to get out of the folder and to get into another folder and get into the file i want
 require_once(__DIR__ . "/../model/config.php");
?>
<header>

<nav class="navbar navbar-default navbar-fixed-top">
	
	<ul>
	 <!--echoing out the right path to the post.php -->
	 <!--were echoing out a string -->
		 <a href="<?php echo $path . "post.php"?>">Blog Post Form</a>
		 <a href="login.php">Login</a> 
		 <a href="register.php">Register</a> 
		 <a href="logout-user.php">Logout</a>
		
	</ul>
</nav>
</header>