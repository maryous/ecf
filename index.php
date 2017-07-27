
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet'>
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
                <IMG src="image/defi1.jpg"height="400" width="500">
                <IMG src="image/defi2.jpg"height="400" width="500">
                <IMG src="image/defi3.jpg"height="400" width="500">
                <IMG src="image/defi4.jpeg"height="400" width="500">
                <IMG src="image/defi5.jpg"height="400" width="500">
                <IMG src="image/defi6.jpg"height="400" width="500">
            </MARQUEE>

            <div class="container">

                <div class="row text-center">
                    <!-- . -->
                    <!--  -->
                    <div class="row text-center" id='connaitre'>
                        <div class='texte'>
                            <!--nous connaitre-->
                            <h1>Faites grandir une cause à grands pas</h1>
                            <p><strong>Participez à l’un des plus <strong>grands événements caritatifs</strong> de France<strong>
                                        en courant ou marchant</strong> au profit d’une cause qui vous tient à coeur.</p>

                            <br><p> Plus de 200 causes représentées. Et vous, pour qui courez-vous ?</strong></p>
                        </div>
                        <div class="badges">
                            <div class="circle cancer"><span> <strong> Cancer / Santé </strong></span></div>
                            <div class="circle maladies"><span> <strong> Maladies <br> rares</strong></span></div>
                            <div class="circle handicap"><span> <strong> Handicap</strong></span></div>
                            <div class="circle solidarite"><span> <strong> Solidarité <br> &amp; Social</strong></span></div>
                            <div class="circle enfance"><span><strong>Enfance</strong></span></div></a>
                            <div class="circle aide"><span><strong>Animation <br> des patients</strong></span></div>
                            <div class="circle autres"><span><strong>Et d'autres causes !</strong></span></div>
                        </div>
                        <div class='texte'>
                            <h1>LE CONCEPT</h1>
                            <p> La Course de notre association  a déjà permis de collecter plus de 10 millions d’euros au profit de plus de 200 causes.
                                Vous aussi, participez à l’un des plus grands événements caritatifs en France ! </p></br>
                            <p><strong>Athletik-les 1000 pas</strong> est actif dans 156 pays en développement. Dans le monde entier, notre 
                                mission s'articule autour de 7 domaines étroitement liés,
                                qui sont tous essentiels au bon développement de l'enfant : santé, VIH-SIDA, eau assainissement et hygiène, 
                                nutrition, protection, éducation, et inclusion sociale.
                                Notre objectif est de permettre à chaque enfant de commencer sa vie avec
                                un maximum de chances de développement et d'épanouissement.</p>



                        </div>
                    </div>
                    <!-- evenement approche!!.LAFFICHAGE DES COURSES PASSÉES ET A VENIR -->
                    <?php include'evenement.php' ?>

                </div>


            </div>
        </main>
        <section class='resulta'>
            <div class='include_result'>
                <!-- AFFICHAGE DU CLASSEMENT GENARL DE 2017!!. -->
                <?php include 'resultat.php' ?>
            </div>
        </section>
        <footer>
            <p>Vous avez d'autres questions ? <a href="/faq">Rendez-vous dans notre FAQ</a></p>
            Accédez à notre <a href="https://drive.google.com/file/d/0B3xauCRnZrAxeS1sbHhCUVVlX1Rocm1MbGRHOVh3NTZZTTNz/view?usp=sharing" target="_blank">Communiqué de Presse</a>

            Et faites-nous vivre votre journée sur #Athletik-les 1000 pas :
            <a  href="https://www.facebook.com" ><img src="image/facebook.png"></a>
            <a href="https://twitter.com/hashtag/coursedesheros"><img width="70" height="74"src="image/twitter.png"></a>
            <a href="https://instagram.com"><img width="80" height="84"src="image/insta.png"></a>


        </footer>
    </body>
</html>
