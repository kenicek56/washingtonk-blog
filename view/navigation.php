<?php
//DIR to get out of the folder and to get into another folder and get into the file i want
 require_once(__DIR__ . "/../model/config.php");
?>

<nav>
	
	<ul>
	 <!--echoing out the right path to the post.php -->
	 <!--were echoing out a string -->
		<li> <a href="<?php echo $path . "post.php"?>">Blog Post Form</a></li>
	</ul>
</nav>
