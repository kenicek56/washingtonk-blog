<?php
require_once(__DIR__ . "/../model/config.php");
require_once(__DIR__ . "/../model/date.php");
?>

<h1>Login</h1>

<form method="post" action="<?php echo $path . "controller/login-user.php"?>">
	
<div>
	<label for="username">Username: </label>
	<input type ="text" name="username" />
</div>

<div>
    <label for="password">Password: </label>
    <input for="password" name="password" />
</div>

<div>
<!-- adds on a submit button -->
	<button type="submit">Submit</button>
</div>
</form>