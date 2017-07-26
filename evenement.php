
<!DOCTYPE html>
<!--                          traitement de l'affichage des courses       ---------------------->
<html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" href="style.css">
        <title></title>
    </head>
    <body>
        <div class="event-is-coming" id='ancre'>
            <?php
            echo'<div class=eve >';
            try {
                //connexion a la base ddd
                include'connexion_bdd.php';
                $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
            //preparation de la requet
            //JE SELECTIONNE TOUT DE LA TABLE MEETING/////////////////////////////////////////////
            $reponse = $bdd->query('SELECT * FROM meeting');
            echo'<h3>L\'événement approche !</h3>';
            //je verifie si la personne connecté admin ou pas (admin==1)/////////////
            if (isset($_SESSION['admin'])) {
                echo '<a class="add_event" href="formadd.php">ajouter un événement</a>';
            }
            echo' <a href="index.php"><img src="image/home.gif"></a>';
            echo' <p>Retrouvez les principales informations pratiques en un clic :</p>';
            while ($donnees = $reponse->fetch()) {



                echo'<div class="row">';
                echo'<div class="col-sm-6" style="border-right: solid 0.5px;">';

                echo' <a href="https://www.google.fr/imgres?imgurl=http://entrainement-sportif.fr/course-programme-debutant.gif&imgrefurl=http://entrainement-sportif.fr/course-pied-debutant-plan-entrainement.htm&h=1920&w=631&tbnid=tED5wCL6YbkPwM:&tbnh=160&tbnw=52&usg=__iY_l248WIW__6Z3ypqQmqZpo77Y=&vet=10ahUKEwjf7ODO_KbVAhUGWxoKHUYkDy4Q9QEIKzAA..i&docid=i9jmrA0bmjb7WM&client=ubuntu&sa=X&ved=0ahUKEwjf7ODO_KbVAhUGWxoKHUYkDy4Q9QEIKzAA#h=1920&imgdii=tED5wCL6YbkPwM:&tbnh=160&tbnw=52&vet=10ahUKEwjf7ODO_KbVAhUGWxoKHUYkDy4Q9QEIKzAA..i&w=631" target="_blank">Accès au parc</a>';
                echo'  <a href="https://www.google.fr/imgres?imgurl=http://entrainement-sportif.fr/course-programme-debutant.gif&imgrefurl=http://entrainement-sportif.fr/course-pied-debutant-plan-entrainement.htm&h=1920&w=631&tbnid=tED5wCL6YbkPwM:&tbnh=160&tbnw=52&usg=__iY_l248WIW__6Z3ypqQmqZpo77Y=&vet=10ahUKEwjf7ODO_KbVAhUGWxoKHUYkDy4Q9QEIKzAA..i&docid=i9jmrA0bmjb7WM&client=ubuntu&sa=X&ved=0ahUKEwjf7ODO_KbVAhUGWxoKHUYkDy4Q9QEIKzAA#h=1920&imgdii=tED5wCL6YbkPwM:&tbnh=160&tbnw=52&vet=10ahUKEwjf7ODO_KbVAhUGWxoKHUYkDy4Q9QEIKzAA..i&w=631" target="_blank">Le programme</a>';
                echo' <a href="https://www.google.fr/maps" target="_blank">Plan du village</a>';

                echo'</div>';
                //affichage des événement par rapport a leur date je verifie si la date est passé ou pas 
                $aujourdhui = new DateTime();
                $lancement = new DateTime($donnees['date']);

                if ($aujourdhui > $lancement) {
                    echo 'événement déja passé !';
                } else {
                    echo 'course à venir!!';
                }
                //envoyer le nom et id du metting par un get numevent et $name .
                echo'<h3><a href="resulta_ind.php?numevent=' . $donnees["id"] . '&name=' . $donnees['name'] . '">' . $donnees['name'] . '</a></h3>';
                echo '<p class="des" > description: ' . ' ' . $donnees['description'] . '</p>';
                echo '<P class= "date"> Date de l\'evenement:' . ' ' . $donnees['date'] . '</p>';
                echo'</div>';
            }
            ?>


            <?php echo'</div>' ?>;

        </div>'
    </body>
</html>
