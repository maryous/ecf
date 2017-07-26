
<?php session_start() ?>
<html>
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="style.css">

        <title></title>
    </head>
    <body>
        <?php
//rendre l'affichage des resultat par meeting dYnamique
//ouvertured'une connexion a la bdd

        include'connexion_bdd.php';

        //aficher les erreurs
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //preparer ma requet

        //dans ma requet je recupere par get id et le n meeting
        $reponse = $bdd->prepare('SELECT athlete.*,result.time, result.points FROM athlete inner join result on athlete.id = result.id WHERE result.meeting_id = :id OrDER BY result.points DESC');
        $reponse->bindValue(':id', $_GET['numevent'], PDO::PARAM_INT);

        $i = 1;
//EXECUTION DE LA REQUET
        $executeIsok = $reponse->execute();
        echo'<div class="result" ">';
        echo'<h2>le classement par course !</h2>';
        echo'<h3>le classement de la course ' . $_GET["name"] . '</h3>';
        echo'<a href="index.php"><img src="image/home.gif"></a>';

        echo'</div>';
        echo'<table>';
        echo'<tr>
               <th>place</th>
             <th>athlete</th>
             <th>score</th>
             <th>temps</th>';

        echo'</tr>';
        while ($donnees = $reponse->fetch()) {
            echo'<tr>';
            echo '<td>' . $i++ . '</td><td>' . $donnees['firstname'] . ' ' . $donnees['lastname'] . '</td><td>' . $donnees['points'] . '</td><td>' . $donnees['time'] . '</td>';
            if (isset($_SESSION['admin'])) {
                //je donne un get a la ligne que je recupere pour modiffier
                echo'<td><a href="form_modif.php?numresult=' . $donnees["id"] . '">modifier</a></td>';
            }

            echo'</tr>';
        }
        echo'</table>';
        ?>
    </body>
</html>