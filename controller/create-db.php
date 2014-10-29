<?php
// access my model
require_once(__DIR__ . "/../model/database.php");

// gives us the nessesary function so we can use our mysqli
//
$connection = new mysqli($host, $username, $password);

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

$connection->close();



