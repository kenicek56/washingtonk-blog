<!DOCTYPE html>
<html>
<head>
      <title></title>
      <!--connects to bootstrap and the main.css-->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/Main.css">
      <link rel="stylesheet" type="text/css" href="css/custom-style.css">
    
</head>
<header>
       <div id="title" class="Blog-Project col-xs-12">
           <h1>Blog Project</h1>
      </div>
</header>
<body>
<div class="container">
      <p>container</p>
      <div class="row">
      <p>row</p>
      </div>
</div>
<div class="post"> 
</div>

</body>
</html>

<?php
     require_once(__DIR__ . "/controller/login-verify.php");
      // connects to the header
      require_once (__DIR__ . "/view/header.php");
      // connects
      if(authenticateUser()) {
      require_once (__DIR__ . "/view/navigation.php");
      }
      // connects to create-db.php
      //require_once(__DIR__ . "/controller/create-db.php");
      //require_once(__DIR__ . "/model/date.php");
      require_once(__DIR__ . "/controller/read-posts.php");
      require_once (__DIR__ . "/view/footer.php");
     
?>

