<?php
//ouvertured'une connexion a la bdd
var_dump($_POST);
 $bdd = new PDO('mysql:host=localhost;dbname=athletik;charset=utf8', 'root', 'aase89');
 
 //aficher les erreurs
 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 //preparer ma requet
 
 $pdoStat= $bdd->prepare("INSERT INTO athlete.*,result.time, result.points FROM athlete inner join result on athlete.id = result.id WHERE "
         . "              result.meeting_id = :id OrDER BY result.points DESC'");

//on lie chaque marqueur a une valeur 
 $name=$_POST['nom_ath'];
 $prenom=$_POST['prenom_ath'];
 $age=$_POST['age_ath'];
 $score=$_POST['score'];
 //chaque marqueur on donne une valeur
 $pdoStat->bindValue(':name', $name ,PDO::PARAM_STR) ;
 $pdoStat->bindValue(':prenom', $prenom,PDO::PARAM_STR) ;
 $pdoStat->bindValue(':age',$age ,PDO::PARAM_INT) ;
 $pdoStat->bindValue(':score',$score ,PDO::PARAM_INT) ;
 
 
 
 
 //execution de la requete préparée
 
 $insertIsok=$pdoStat->execute();
 
 //les message a aficher 
      if ($insertIsok) 
          {
         //tout va bien
         echo 'course ajouter avec succes!<a href="index.php">retour à la liste</a>';
        }
