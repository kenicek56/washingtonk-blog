<?php
	require_once(__DIR__ . "/../model/config.php");

	$query = "SELECT * FROM posts";
// retrieves the post from our database
	$result = $_SESSION["connection"]->query($query);

	if ($result) {
		while ($row = mysqli_fetch_array($result)) {
	        echo "<div class='post'>";
			echo "<h2>" . $row['title'] . "</h2>";
			echo "<p>" . $row['DateTime'] . "</p>";
			echo "<br />";
			echo "<p>" . $row['post'] . "</p>";
			echo "<br/>";
			echo "</div>";
		}
	}