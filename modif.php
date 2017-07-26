<?php
header("refresh:3;url=index.php");
//////////////////////////////////////////ma page qui traite les modification envoyé par le formulaire forme_modif.php////////////////////////
include 'connexion_bdd.php';

$reponse = $bdd->prepare('UPDATE result SET time =:time, points= :points WHERE result.id = :numresul');
//je lie chaque marqueur par sa valeur 
$reponse->bindValue(':numresul', $_POST['numcontact'], PDO::PARAM_INT);
$reponse->bindValue(':time', $_POST['time'], PDO::PARAM_INT);
$reponse->bindValue(':points', $_POST['points'], PDO::PARAM_INT);



$executeIsok = $reponse->execute();
echo'<a href="index.php"><img src="image/home.gif"></a>';
//exécution d ela requet
if ($executeIsok) {
    $message = 'le contact a été mis à jour';
            
} else {
    $message = 'echec de la mise à jour du contact';
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <!--  <link rel="stylesheet" href="style.css">-->

        <title></title>
    </head>
    <h1>modification :resultat</h1>

</head>

<body>
    <h1><?= $message ?></h1>

</body>
</html>