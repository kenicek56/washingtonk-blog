<?php

require_once(__DIR__ . "/../model/config.php")

unset($_SESSION["authenticated"]);
// destroys the session when we logout
session_destroy();
hearder("Location: " . $path . "index.php");