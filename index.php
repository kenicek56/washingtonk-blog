<?php
     require_once(__DIR__ . "/controller/login-verify.php");
      // connects to the header
      require_once (__DIR__ . "/view/header.php");
      // connects
      if(authenticateUser()) {
      require_once (__DIR__ . "/view/navigation.php");
      }
      // connects to create-db.php
      require_once(__DIR__ . "/controller/create-db.php");
      require_once (__DIR__ . "/view/footer.php");
      require_once(__DIR__ . "/model/date.php");
      require_once(__DIR__ . "/controller/read-posts.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--connects to bootstrap and the main.css-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/Main.css">
    
</head>
<body>

</body>
</html>