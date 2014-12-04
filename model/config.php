<?php
require_once(__DIR__ . "/database.php");

$path = "/washingtonk-blog/";
//information in the mode */
$host = "localhost";
$username = "root";
$password = "root";
$database = "blog_db";
// based off of the old class
// the database objects is going to query the database
// sessions used to save database objects
// session equal to database connection
if(!isset($_SESSION["connection"])) {
$connection = new Database($host, $username, $password, $database);
$_SESSION["connection"] = $connection;
}