<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">
        <title></title>
    </head>
    <body>
        <?php
        include 'entete.php';
        ?>
        <main>
            <!-- defillement des images. -->
            <MARQUEE scrollamount="4"onmouseover="this.stop()" onmouseout="this.start()">
                <IMG src="image/defi1.jpg"height="500" width="600">
                <IMG src="image/defi2.jpg"height="500" width="600">
                <IMG src="image/defi3.jpg"height="500" width="600">
                <IMG src="image/defi4.jpeg"height="500" width="600">
            </MARQUEE>

            <div class="container">

                <div class="row text-center">
                    <!-- . -->
                    <!--  -->
                    <div class="row text-center" id='connaitre'>
                        <h1>Faites&nbsp;grandir&nbsp;une&nbsp;cause à&nbsp;grands pas</h1>
                        Participez à l’un des plus <strong>grands événements caritatifs</strong> de France&nbsp;<strong>en courant ou marchant</strong> au profit d’une cause qui vous tient à coeur.

                        <br> Plus de <strong>200 causes représentées</strong>. Et vous, pour qui courez-vous ?
                        <div class="badges">
                            <a href="http://www.coursedesheros.com/cancer-sante/"><div class="circle cancer"><span> <strong> Cancer / Santé </strong></span></div></a>
                            <a href="http://www.coursedesheros.com/maladies-rares/"><div class="circle maladies"><span> <strong> Maladies <br> rares</strong></span></div></a>
                            <a href="http://www.coursedesheros.com/handicap/"><div class="circle handicap"><span> <strong> Handicap</strong></span></div></a>
                            <a href="http://www.coursedesheros.com/solidarite/"><div class="circle solidarite"><span> <strong> Solidarité <br> &amp; Social</strong></span></div></a>
                            <a href="http://www.coursedesheros.com/enfance/"><div class="circle enfance"><span><strong>Enfance</strong></span></div></a>
                            <a href="http://www.coursedesheros.com/animation/"><div class="circle aide"><span><strong>Animation <br> des patients</strong></span></div></a>
                            <a href="http://www.coursedesheros.com/autres/"><div class="circle autres"><span><strong>Et d'autres causes !</strong></span></div></a>
                            
                        </div>
                        <div>
                            <h1>LE CONCEPT</h1>
                            <p> La Course de notre association  a déjà permis de collecter plus de 10 millions d’euros au profit de plus de 200 causes.
                                Vous aussi, participez à l’un des plus grands événements caritatifs en France ! </p></br>
                            <p><strong>Athletik-les 1000 pas</strong> est actif dans 156 pays en développement. Dans le monde entier, notre mission s'articule autour de 7 domaines étroitement liés, qui sont tous essentiels au bon développement de l'enfant : santé, VIH-SIDA, eau assainissement et hygiène, nutrition, protection, éducation, et inclusion sociale.
Notre objectif est de permettre à chaque enfant de commencer sa vie avec un maximum de chances de développement et d'épanouissement.

</p>
                            
                        </div>
                    </div>
                    <!-- evenement approche!!. -->
                    <?php include'evenement.php' ?>
                </div>


            </div>
        </main>
        <section class='resulta'>
            <div class='include_result'>
                <?php include 'resultat.php'?>
            </div>
        </section>
        <footer>
            <p>Vous avez d'autres questions ? <a href="/faq">Rendez-vous dans notre FAQ</a></p>
            Accédez à notre <a href="https://drive.google.com/file/d/0B3xauCRnZrAxeS1sbHhCUVVlX1Rocm1MbGRHOVh3NTZZTTNz/view?usp=sharing" target="_blank">Communiqué de Presse</a>

            Et faites-nous vivre votre journée sur #coursedesheros :
            <a style="text-decoration: initial; border: 1px solid; border-radius: 15px; padding: 2px 15px; line-height: 50px;" href="https://www.facebook.com/hashtag/coursedesheros" target="_blank"><i class="fa fa-facebook" style="font-size: 16px; margin-right: 8px;"></i>#coursedesheros</a>

            <a style="text-decoration: initial; border: 1px solid; border-radius: 15px; padding: 2px 15px;" href="https://twitter.com/hashtag/coursedesheros" target="_blank"><i class="fa fa-twitter" style="font-size: 16px; margin-right: 8px;"></i>#coursedesheros</a>

        </footer>        
    </body>
</html>
