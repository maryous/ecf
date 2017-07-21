<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
                <h1>Athletik-les 1000 pas</h1>
                <?php
                if (isset($_SESSION['login'])) {
                    echo'vous etes connecté!bonjour :' . $_SESSION['login'];
                }
                ?>
            </div>
        </header>
        <nav>            
            <ul class="ul">
                <li><a href="#1">Home</a></li>
                <li><a href="#connaitre">nous connaitre</a></li>
                <li><a href="#3">photos</a></li>
                <li><a href="#ancre">evenement a venir</a></li>
                <li><a href="#ancre1">resultat des courses</a></li>
                <li><a href="users.php">créer un compt</a></li>
                <li><a href="connexion.php">se connecter</a></li>


            </ul>      
        </nav>
        </section>
    </body>
</html>
