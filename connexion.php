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
        <form action='' method='post' name='connecter'class='formulaire'>
        <label>votre pseudo ou email <input name='connecter' type='text' class='connecter'placeholder="rentrez votre pseudo!"/></label></br>
        <label>entrez mot de passe <input name='password' type='password' placeholder="entrez votre mot de passe!"></input></label></br>
        <input name='submit' type='submit' value='se connecter'/>
    </body>
</html>
    </body>
</html>
<?php 
 if(isset($_POST['connecter']) && isset($_POST['password']) ) {
     
     //connexion a la base ddd
    $bdd = new PDO('mysql:host=localhost;dbname=athletik;charset=utf8', 'root', 'aase89');
    
    //preparation de la requet
    
    $reponse = $bdd->prepare('SELECT * FROM users WHERE username =:username OR email =:email  ');
                    $reponse->bindValue(':username', $_POST['connecter']);
                    $reponse->bindValue(':email', $_POST['connecter']);
                    $reponse->execute();
                    $utilisateur=$reponse->fetch();
                    
                            if (password_verify($_POST['password'], $utilisateur['password'])) {
      echo'vous etes connecté';
      $_SESSION['login']=$utilisateur['username'];
      //redirection vers la page index.php si le login est ok 
      header("Location: index.php", true);
    } else {
      echo'erreur de mot de passe ou pseudo!<a href="index.php">retour a la page d/acceuil</a>';
    }
                            
 }?>