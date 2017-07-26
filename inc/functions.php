<?php
//lister les fonctions pour faire fonctionner le site

function isAdmin(){
  //chercher dans la BDD si le user est true sur la colonne admin
  
//SELECT * FROM `user` WHERE `username`=$username
//$result = if colonne admin =1 ==> ok
$result=true;
return $result;


}




?>
