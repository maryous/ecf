<!DOCTYPE html>
<?php session_start(); 
include'class.php';
$Connect= new Connecte();
?>
<!--espace connexion pour l'admin et les autres utilisateurs-->
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
            <?php $Connect->connecte() ?>
    </body>
</html>
</body>
</html>

