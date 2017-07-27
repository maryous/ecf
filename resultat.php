
<!--CLASSEMENT GENERAL AVEC LE BOUTTON RESULTAT GÉNÉRAL JE FAIT UN INCLUDE DANS INDEX.PHP-->


<?php
echo' <div id="ancre1">';
echo'<a href="index.php"><img src="image/home.gif"></a>;';
try {
    //connexion a la base ddd
    include'connexion_bdd.php';
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
//preparation de la requet
$i = 1;
$reponse = $bdd->query('SELECT SUM(result.points) as total, athlete.lastname, athlete.firstname FROM result inner join athlete on result.athlete_id = athlete.id inner join meeting on result.meeting_id = meeting.id WHERE YEAR(CURRENT_DATE()) = 2017 GROUP BY athlete.id ORDER BY total DESC ');
echo'<h2>le classement général de 2017!</h2>';


echo'<div class="result">';
while ($donnees = $reponse->fetch()) {

    echo '<li class="li_result">place numéro ' . $i++ . '  ==>' . $donnees['firstname'] . ' ' . $donnees['lastname'] . ' ' . '<p> score:  ' . $donnees['total'] . '</p></li>';
}
echo'</div>';
?>


