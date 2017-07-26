
<?php
///////////////////////////////CREATION D ENOUVEAU UTILISATEUR/////////
//connexion a la BDD
include'connexion_bdd.php';

//aficher les erreurs
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//partie pour traiter champs  new user on commence par traiter nos champs de saisie
//si on saisie qlk chose on commence de traiter les erreurs
if (isset($_POST['submit'])) {
    //on fait le test sur le boutton submit(si on clic sur inscrivez vous)
    $errors = [];

    //on commence par le champs pseudo si ce champs est vide et pas valide(on utilise les expression regulieres)

    if (empty($_POST['new_user']) || !preg_match('/^[a-zA-Z0-9]+$/', $_POST['new_user'])) {

        $errors['new_user'] = 'veuillez rentrez pseudo valide (alphanumeriqe)';
    } else {
        //si on choisis un pseudo deja existant!!
        $req = $bdd->prepare('SELECT id FROM user WHERE username=?');
        $req->execute([$_POST['new_user']]);
        $users = $req->fetch();
        if ($users) {
            $errors['new_user'] = 'ce pseudo est deja utilisé!!';
        }
    }


    //si notre adresse mail est vide et n'est pas valide
    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        $errors['email'] = 'votre adresse mail n\'est pas valide';
    } else {
        //si on choisis un pseudo deja existant!!
        $req = $bdd->prepare('SELECT id FROM user WHERE email=?');
        $req->execute([$_POST['email']]);
        $users = $req->fetch();
        if ($users) {
            $errors['email'] = 'email deja utilisé pour un autre compte !!';
        }
    }
    //si le mot de pass n'est pas valide
    if (empty($_POST['password']) || ($_POST['password'] != $_POST['password1'])) {

        $errors['password'] = 'votre mot de passe n\'est pas valide!!ou les deux champs ne corespondent pas ';
    }
    //si on a pas d'erreur
    if (empty($errors)) {
        //on prepare notre requet
        $req = $bdd->prepare('INSERT INTO user SET username=?, password=? , email=?');
        //hache le mot de passe
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $req->execute([$_POST['new_user'], $password, $_POST['email']]);
        die('votre compte a bien etait créer!bienvenue parmi nous');
    }
}
?>
<?php if (!empty($errors)): ?>
    <div class='alert'>
        <p>vous navez pas rempli le formulaire correctement</p>
        <ul>
    <?php
    foreach ($errors as $key => $value) {
        echo "<li>" . $value . "</li>";
    }
    ?>

        </ul>
    </div>
    <!-- pour dire que le if est fini-->
<?php endif; ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">


        <link rel="stylesheet" href="style.css">

        <title></title>
<?php include 'entete.php'; ?>

    <h1> espace inscription </h1>


    <!--traitement de captcha-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

    <form action='' method='post' name='formulaire_user'class='formulaire'>

        <label>votre pseudo</label><input name='new_user' type='text' class='new_user'placeholder="choisisez un pseudo!"/>
        <label>entrez votre adress mail</label> <input name='email' type='email' placeholder="entrez votre mail ici!"/>
        <label>entrez votre mot de passe</label><input name='password' type='password' placeholder='entrez un mot de passe valide'/>
        <label>confirmation mot de passe</label><input name='password1' type='password' placeholder='confirmez votre mot de passe' />
        <!--traitement de captcha-->
        <div class="g-recaptcha" data-sitekey="6LdoVikUAAAAAAV8WcH6yAgFv-ddbmKjKenO-vvn"></div>
        <a href="index.php"><img src='image/home.gif'></a>
        <input name='submit' type='submit' value='inscrivez vous'/>

    </form>


</body>
</html>