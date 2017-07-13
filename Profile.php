<?php

include_once "function.php";

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
    <?php include "navbarco.html" ?>
    <div class="row">
      <div class="col-md-offset-6 col-md-4 col-xs-offset-4 col-xs-3">
        <h1>Profile</h1>
      </div>
    </div>
    
    <label for="user">Utilisateur</label>
    <p><?php echo $_SESSION['user']['login']; ?></p>
    <label for="user">Email</label>
    <p><?php echo $_SESSION['user']['email']; ?></p>
    <label for="user">Utilisateur</label>
    <p><?php echo $_SESSION['user']['password']; ?></p>
  </body>
</html>
