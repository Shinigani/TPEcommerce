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
     <?php
       if(isset($_SESSION['user'])){
         include "navbarco.html";
       } else {
         include "navbar.html";
       }
     ?>
     <div class="row">
       <div class="col-md-offset-6 col-md-4 col-xs-offset-4 col-xs-3">
         <h1>Overbjet</h1>
       </div>
     </div>
     <div class="row">
      <div class="col-md-offset-2 col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="..." alt="...">
          <div class="caption">
            <h3>Ovowatch</h3>
            <p>Jeux moba/fps</p>
            <p><a href="ajouterpanier.php?id=1" class="btn btn-primary" role="button">Achouter</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-offset-1 col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="..." alt="...">
          <div class="caption">
            <h3>Ovocatch</h3>
            <p>Jeux d'agilité</p>
            <p><a href="ajouterpanier.php?id=2" class="btn btn-primary" role="button">Achouter</a></p>
          </div>
        </div>
      </div>
    </div>
   </body>
 </html>
