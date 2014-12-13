<!DOCTYPE html>
<html>
<head>
      <title></title>
      <!--connects to bootstrap and the main.css-->
     
    
</head>
<header>
      
</header>
<body>
</body>
</html>
<?php

require_once(__DIR__ . "/../model/config.php");

$query = "SELECT * FROM posts";
// retrieves the post from our database
$result = $_SESSION["connection"]->query($query);

if ($result) {
	while ($row = mysqli_fetch_array($result)) {
		echo "<div class='container'>";
		echo "<div class='row'>";
		echo "<div id='title' class='Blog-Project col-xs-12'>";
		echo "<h1>Blog Project</h1>";
		echo "</div>";
        echo "</div>";
		echo "<div class='row'>";
		echo "<div class = 'post col-xs-7'>";
		echo "<h2>" . $row['title'] . "</h2>";
		echo "<p>" . $row['DateTime'] . "</p>";
		echo "<br />";
		echo "<p>" . $row['post'] . "</h1>";
		echo "<br/>";
		echo "</div>";
		echo "<div id='title' class='About-Me col-xs-4'>";
		echo "<h1>About-Me</h1>";
        echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		



	}

}


