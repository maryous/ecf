
<?php


//ouvertured'une connexion a la bdd

 $bdd = new PDO('mysql:host=localhost;dbname=athletik;charset=utf8', 'root', 'aase89');
 
 //aficher les erreurs
 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 //preparer ma requet
 
 $pdoStat= $bdd->prepare("INSERT INTO meeting VALUES (NULL, :name,:description,:date)");

//on lie chaque marqueur a une valeur 
 $lieux=$_POST['lieux1'];
 $description=$_POST['description1'];
 $date=$_POST['date1'];
 
 //echo $titre.$acteur.$date.$synopsis.$miniature; 
 $pdoStat->bindValue(':name', $lieux ,PDO::PARAM_STR) ;
 $pdoStat->bindValue(':description', $description,PDO::PARAM_STR) ;
 $pdoStat->bindValue(':date',$date ,PDO::PARAM_INT) ;
 
 
 
 //execution de la requete préparée
 
 $insertIsok=$pdoStat->execute();
 
 //les message a aficher 
      if ($insertIsok) 
          {
         //tout va bien
         echo 'super!!l\'evenement ajouter avec succés!</a>';
        }
       
        




 
?>



