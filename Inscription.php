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
    <?php include "navbar.html" ?>
    <div class="row">
      <div class="col-md-offset-6 col-md-4 col-xs-offset-4 col-xs-3">
        <h1>Inscription</h1>
      </div>
    </div>
    <form action="test.php" method="post">
      <div class="row" style="margin-top:20px;">
        <div class="col-md-offset-1 col-md-4 col-xs-offset-1 col-xs-4">
          <div class="input-group">
            <span class="input-group-addon" id="sizing-addon2">Nom</span>
            <input type="text" class="form-control" placeholder="Jean" aria-describedby="sizing-addon2" name="name">
          </div>
        </div>
        <div class="col-md-offset-1 col-md-4 col-xs-offset-1 col-xs-4">
          <div class="input-group">
            <span class="input-group-addon" id="sizing-addon2">Prénom</span>
            <input type="text" class="form-control" placeholder="Michel" aria-describedby="sizing-addon2" name="surname">
          </div>
        </div>
      </div>

      <div class="row" style="margin-top:20px;">
        <div class="col-md-offset-1 col-md-4 col-xs-offset-1 col-xs-4">
          <div class="input-group">
            <span class="input-group-addon" id="sizing-addon2">Email</span>
            <input type="text" class="form-control" placeholder="jean@michel.fr" aria-describedby="sizing-addon2" name="email">
          </div>
        </div>
        <div class="col-md-offset-1 col-md-4 col-xs-offset-1 col-xs-4">
          <div class="input-group">
            <span class="input-group-addon" id="sizing-addon2">Mot de passe</span>
            <input type="text" class="form-control" placeholder="123soleil" aria-describedby="sizing-addon2" name="password">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-offset-6 col-md-4 col-xs-offset-5 col-xs-3" style="margin-top:20px;">
          <input type="submit" name="Inscription" value="Valider">
        </div>
      </div>

    </form>
  </body>
</html>
