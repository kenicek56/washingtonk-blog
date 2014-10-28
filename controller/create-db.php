<?php

require_once(__DIR__ . "/../model/database.php");

$connection = new mysqli($host, $username, $password);

if($connection->connect_error ){

die("Error: " . $connection->connect_error);	
}
$exists = $connection->select_db($database);

if(!$exists){
	// sends commands to the database
	$query = $connection->query("CREATE DATABASE $database");
	
// checks if our query is succesful
if($query){

echo "Successfully created database " . $database;

}

}

$connection->close();



