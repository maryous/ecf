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