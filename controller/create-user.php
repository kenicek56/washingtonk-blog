<?php
require_once(__DIR__ . "/../model/config.php");
// deletes any characters it doesnt recoginze as part of the string 
//deletes any characters that dont exsist in email
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

//echo $email . " - " . $username . " - " . $password;

//
// tells php that we wanna use salt 56 5,000 times
//creates unqiue id for us
$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";

// tells it to use this password and this salt to come together to create a incrypted password.
$hashedPassword = crypt($password, $salt);

$query = $_SESSION["connection"]->query("INSERT INTO users Set "
	. "email = '$email',"
	. "username = '$username',"
	. "password = 'hashedPassword',"
	. "salt = '$salt'");

if($query) {
	echo "Successfully created user: $username";
}
else {
	echo "<p>" . $_SESSION["connection"]->error . "</p>";
}