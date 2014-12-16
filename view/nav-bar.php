<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" type="text/css" href="css/nav.css">
</head>
<body>
<div class="container"> 
<div class="row"> 
<div id="title" class="Blog-Project col-xs-12">
<h2>Blog Project</h2>
</div>
</div>
<div class="row">
<div class=" post col-xs-7">
<?php
require_once(__DIR__ . "/../model/config.php");

$query = "SELECT * FROM posts";
// retrieves the post from our database
$result = $_SESSION["connection"]->query($query);

if ($result) {
	while ($row = mysqli_fetch_array($result)) {
		
        echo "<div class='content-box'>";
		echo "<h2>" . $row['title'] . "</h2>";
		echo "<p>" . $row['DateTime'] . "</p>";
		echo "<br />";
		echo "<p>" . $row['post'] . "</h1>";
		echo "<br/>";
		echo "</div>";
	



	}

}

 ?>
</div>
<div id="title" class="About-Me col-xs-4">
	<h1>About Me</h1>
</div>
</div>
</div>
</body>
</html>