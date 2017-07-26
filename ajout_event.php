
<?php
/////////////////////////////////////////////////////traitement de l'ajout des course///////////////////
//ouvertured'une connexion a la bdd

include'connexion_bdd.php';

//aficher les erreurs
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//preparer ma requet

$pdoStat = $bdd->prepare("INSERT INTO meeting VALUES (NULL, :name,:description,:date)");

//on lie chaque marqueur a une valeur
$lieux = htmlentities( $_POST['lieux1']);
$description = htmlentities( $_POST['description1']);
$date = htmlentities($_POST['date1']);

//echo;
$pdoStat->bindValue(':name', $lieux, PDO::PARAM_STR);
$pdoStat->bindValue(':description', $description, PDO::PARAM_STR);
$pdoStat->bindValue(':date', $date, PDO::PARAM_INT);



//execution de la requete préparée

$insertIsok = $pdoStat->execute();

//les message a aficher
if ($insertIsok) {
    //tout va bien
    echo 'super!!l\'evenement ajouter avec succés!<a href="index.php">home</a>';
    
}
?>
