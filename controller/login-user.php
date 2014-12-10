<?php
require_once(__DIR__ . "/../model/config.php");

$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
// selects our salt and password from our users table where our usersname is = to the username tht the user input
$query = $_SESSION["connection"]->query("SELECT  salt, password FROM users WHERE username = '$username'");

if($query->num rows == 1) {

	$row = $query->fetch_array();

	if($row["password"] === crypt($password, $row["salt"])) {
        $_SESSION["authenticated"]=true;
		echo "<p>Login Successful!</p>";
    }

    else {

         echo "<p>Invalid username and password</p>";

    }
}

else {

echo "<p> Invalid username and password</p>";

}