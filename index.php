

<?php
     require_once(__DIR__ . "/controller/login-verify.php");
      // connects to the header
      require_once (__DIR__ . "/view/header.php");

      
      // connects
      if(authenticateUser()) {
      require_once (__DIR__ . "/view/navigation.php");
      }
      require_once(__DIR__ . "/view/body.php");

      require_once (__DIR__ . "/view/nav-bar.php");//view/nav-bar

      // connects to create-db.php
      //require_once(__DIR__ . "/controller/create-db.php");
      //require_once(__DIR__ . "/model/date.php");
      require_once(__DIR__ . "/controller/read-posts.php");
      require_once (__DIR__ . "/view/footer.php");
     
?>

