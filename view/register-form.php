<?php
require_once(__DIR__ . "/../model/config.php");
?>

<h1>Register</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
	
<div>
	<!--creates a slot for the users email-->
	<label for = "email">Email: </label>
	<input type = "text" name ="email" />
</div>

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
