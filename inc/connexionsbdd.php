<?php

function ConnectBDD(){
  try {
      //connexion a la base ddd
      $bdd = new PDO('mysql:host=localhost;dbname=athletik;charset=utf8', 'root', '');
      $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch (Exception $e) {
      die('Erreur : ' . $e->getMessage());
  }
}

function insertNewUser($name,$password)
{


}
class Affichecourse(){


   public  Affichecourse() {
    
}


}
function Updatecourse(){



}
function insertcourse(){



}
function deletecourse(){



}
