<?php
require_once(__DIR__ . "/../model/database.php");
// runs our query
$connection = new mysql($host, $username, $password, $database);

// validates the input.
// tells the input that we want to see the input.
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, "post",FILTER_SANITIZE_STRING);

echo "<p>Title: $title</p>";
echo "<p>Post: $post</p>"
// closes the connection to the database
$connection->close();