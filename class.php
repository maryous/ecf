<?php

class Ajoutevent {

    public function ajoutevent() {
        /////////////////////////////////////////////////////traitement de l'ajout des course///////////////////
//ouvertured'une connexion a la bdd

        include'connexion_bdd.php';

//aficher les erreurs
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//preparer ma requet

        $pdoStat = $bdd->prepare("INSERT INTO meeting VALUES (NULL, :name,:description,:date)");
        if (isset($_POST['lieux1'])) {
//on lie chaque marqueur a une valeur
            $lieux = htmlentities($_POST['lieux1']);
            $description = htmlentities($_POST['description1']);
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
        }
    }

}
class Affichevent{
    public function afficheevent(){
        
        
        
           
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
                echo'</div>' ;
            }
          
    }
}
class Resultat{
    public function résultat() {
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
    }
}

class Connecte{
    public function connecte() {
        
//var_dump($_POST);
if (isset($_POST['connect']) && isset($_POST['password'])) {

    $connect = htmlentities( $_POST['connect']);
    $password = htmlentities ($_POST['password']);


    //connexion a la base ddd
    include'connexion_bdd.php';

    //preparation de la requet
    $reponse = $bdd->prepare('SELECT*FROM user WHERE username=:username OR email=:email');
    $reponse->bindValue(':username', $connect);
    $reponse->bindValue(':email', $connect);
    $reponse->execute();
    $utilisateur = $reponse->fetch();

    $verif = password_verify($password, $utilisateur['password']);

    if (password_verify($password, $utilisateur['password'])) {
        echo'vous etes connecté';
        $_SESSION['login'] = $utilisateur['username'];
        //unset($_SESSION);

        if ($utilisateur['admin'] == 1) {
            $_SESSION['admin'] = true;
        }
        //redirection vers la page index.php si le login est ok
        header("Location: index.php", true);
    } else {


        echo'erreur de mot de passe ou pseudo!<a href="index.php">retour a la page d/acceuil</a>';
    }
}
        
    }
}
?>