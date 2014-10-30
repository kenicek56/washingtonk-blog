<?php
// access my model
require_once(__DIR__ . "/../model/database.php");

// gives us the nessesary function so we can use our mysqli.
// new is a keyword that allows us to build objects within php.
// mysqli is used to connect our objects to the database.
$connection = new mysqli($host, $username, $password);

// to see if the connection was succesful
// to check if its true or nah
// connection->connect_error checks to see if there is a connection error.
if($connection->connect_error ){
	die("Error: " . $connection->connect_error);	
}
$exists = $connection->select_db($database);

if(!$exists){
	// sends commands to the database
	$query = $connection->query("CREATE DATABASE $database");

// checks if our query is successful
	if($query){

	echo "Successfully created database: " . $database;

	}
}

//this else echos that my database is created
else {
	echo "Database already exists";
}
// creates a blog post
$query = $connection->query("CREATE TABLE posts (" 
	// null indicates that when ever we create a new blog post the id cant be known and id cant be empty.
	. "id int (11) NOT NULL AUTO_INCREMENT,"
	. "title varchar(255) NOT NULL,"
	. "post text NOT NULL,"
	. "PRIMARY KEY (id))");
// 1 means there are 11 values.

$connection->close();



