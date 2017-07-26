<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <html>
        <head>
            <meta charset="UTF-8">
            <title></title>
            <link rel="stylesheet" href="style.css">

        <h1>bienvenue sur notre site Athletik-les 1000pas!!veuillez vous connecter!!</h1>
    </head>
    <body>
        <form action='' method='post' name='connect'class='formulaire'>
            <label>votre pseudo ou email <input name='connect' type='text' class='email'placeholder="rentrez votre pseudo!"/></label></br>
            <label>entrez mot de passe <input name='password' type='password' placeholder="entrez votre mot de passe!"></input></label></br>
            <input name='submit' type='submit' value='se connecter'/>
            <a href="index.php"><img src='image/home.gif'</a>
    </body>
</html>
</body>
</html>
<?php
session_start();
//var_dump($_POST);
if (isset($_POST['connect']) && isset($_POST['password'])) {

    $connect = $_POST['connect'];
    $password = $_POST['password'];


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
?>
