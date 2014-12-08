<?php
require_once(__DIR__ . "/../model/config.php");
// deletes any characters it doesnt recoginze as part of the string 
//deletes any characters that dont exsist in email
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

echo $email . " - " . $username . " - " . $password;
