<?php
session_start();
include_once "mocks.php";

function connection($info)
{
  $_SESSION['user'] = $info;
  header('Location: index.php');
}

function check($post)
{
  global $users;
  for ($i=0; $i < 5; $i++)
  {
    if(($post["email"] == $users[$i]["email"]) && ($post["password"] == $users[$i]["password"]) )
    {
        connection($users[$i]);
    }
  }
}

function deconnection()
{
  session_unset();
  session_destroy();
  header('Location: index.php');
}



function panier ($idObjet)
{
  global $users;
  global $articles;
  global $j;
  if (isset($_GET) && !empty($_GET))
  {
    $j=1;
    $idProduit = $_GET['id'];
    //if (!empty $_SESSION['panier']) {

      for ($i=0; $i < 5; $i++)
      {
        if($idProduit == $articles[$i]["id"])
        {
          do {
            $j++;echo $j;
          } while (!empty($_SESSION['user']['panier'][$j]) );

            echo "Vous avez ajouter l'article : " . $articles[$i]["title"]."</br>" ;

            //['id']['title']['description']['prix']
            $_SESSION['user']['panier'][$j]['id']= $articles[$i]['id'];
            $_SESSION['user']['panier'][$j]['title']= $articles[$i]['title'];
            $_SESSION['user']['panier'][$j]['description']= $articles[$i]['description'];
            $_SESSION['user']['panier'][$j]['prix']= $articles[$i]['prix'];
            var_dump($_SESSION['user']['panier']) ;


        }
      }

    //}
  }
  header('Location: ' . $_SERVER['HTTP_REFERER']);
}

function ajoutPanier($post)
{

}
