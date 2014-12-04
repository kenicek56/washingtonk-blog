<?php
// access my model
require_once(__DIR__ . "/../model/config.php");


// creates a blog post
$query = $_SESSION["connection"]->query("CREATE TABLE posts (" 
	// null indicates that when ever we create a new blog post the id cant be known and id cant be empty.
	. "id int (11) NOT NULL AUTO_INCREMENT,"
	. "title varchar(255) NOT NULL,"
	. "post text NOT NULL,"
	. "PRIMARY KEY (id))");
// 1 means there are 11 values.

if($query) {
	echo "<p>Successfully created table: posts</p>";
}
else {
	echo "<p>" . $_SESSION["connection"]->error . "</p>";
}




