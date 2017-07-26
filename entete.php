

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <section>
            <header>
                <div id="head_one">
                    <img src="image/solidarité.jpg" width='200' height="200">
                </div>
                <div  id="head_two">
                    <h1 class='titre'>Athletik-les 1000 pas</h1>
                    <?php session_start(); ?>

                    <?php
                    if (isset($_SESSION['login'])) {
                        echo"<div class='bonjour'><p>vous etes connecté!bonjour :" . $_SESSION['login'] . "</p></div>";
                    }
                    ?>
                </div>
            </header>
            <nav>
                <ul class="ul">
                    <li><a href="#1">Home</a></li>
                    <li><a href="#connaitre">nous connaitre</a></li>

                    <li><a href="#ancre">evenement a venir</a></li>
                    <!--<li><a href="#ancre3">résultat par endroit</a></li>-->
                    <li><a href="#ancre1">resultat général</a></li>
                    <li><a href="users.php">créer un compt</a></li>
                    <?php
                    if (!isset($_SESSION['login']))
                        echo '<li><a href="connexion.php">se connecter</a></li>'
                        ?>
                    <li><a href="lougout.php">se déconnecter</a></li>
                    <?php
                    if (isset($_SESSION['admin'])) {
                        echo '<li><a href="">admin</a></li>';
                    }
                    ?>


                </ul>
            </nav>
        </section>
    </body>
</html>
