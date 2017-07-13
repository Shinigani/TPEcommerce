<?php
  include_once "function.php";
  include_once "mocks.php";
  //check($_POST);
  /*if(isset($_SESSION['user'] != false)){
    connection();
  }*/
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>OverGet</title>
  </head>
  <body>
    <?php
      if(isset($_SESSION['user'])){
        include "navbarco.html";
      } else {
        include "navbar.html";
      }
    ?>
  </body>
</html>
