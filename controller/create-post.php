<?php
require_once(__DIR__ . "/../model/config.php");
// runs our query
//$connection = new mysqli($host, $username, $password, $database);

// validates the input.
// tells the input that we want to see the input.
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, "post",FILTER_SANITIZE_STRING);
$date = new DateTime('today');
$time = new DateTime('America/Los_Angeles');


//establishes a query to our database
//calls our query function
//inserts things in our posts
//references the post on line 9
// setting values within post called title and post
$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post ='$post'");
// checks weather or not we have a true value in our query

if ($query) {
	echo "<p>Successfully inserted post: $title</p>";
	echo "Posted ont " . $date->format("M/D/Y") . " at " . $time->format("h:i");
}
// if my query is false it will echo the erro message
else{
	echo "<p>" . $_SESSION["connection"]->error. "</p>";
}
