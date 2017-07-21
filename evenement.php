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
        <div class="event-is-coming" id='ancre'>
            <?php
                            try {
                                //connexion a la base ddd
                                $bdd = new PDO('mysql:host=localhost;dbname=athletik;charset=utf8', 'root', 'aase89');
                                $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            } catch (Exception $e) {
                                die('Erreur : ' . $e->getMessage());
                            }
                              //preparation de la requet
                              $reponse= $bdd->query('SELECT * FROM meeting');
                              echo'<h2>L\'événement approche !</h2>';
                              echo'<a class="add_event" href="formadd.php">ajouter un événement</a>';
                              echo' <p>Retrouvez les principales informations pratiques en un clic :</p>';
                               while ($donnees = $reponse->fetch()) {
                               
                            
                            
                            echo'<div class="row">';
                            echo'<div class="col-sm-6" style="border-right: solid 0.5px;">';
                                    
                                   echo' <a href="https://drive.google.com/file/d/0B0M0Dx7YsUNKenRjckJCbjluM2pzdTZDTFJrcWNmamNEeVc4/view?usp=sharing" target="_blank">Accès au parc</a>';
                                  echo'  <a href="https://drive.google.com/file/d/0B0M0Dx7YsUNKVmg3d1piQTlwWkVNQ2FfS2FEdmgzdXYwR0hJ/view?usp=sharing" target="_blank">Le programme</a>';
                                   echo' <a href="https://drive.google.com/file/d/0B0M0Dx7YsUNKamxydVlwYzh3UG0zTS0zMlFxRVRpRV9lME1V/view?usp=sharing" target="_blank">Plan du village</a>';

                                echo'</div>';
                            //envoyer le nom et id du metting par un get .
                            echo'<h3><a href="resulta_ind.php?numevent=' . $donnees["id"]. '&name='.$donnees['name'].'">'.$donnees['name']. '</a></h3>';
                                echo '<p class="des" > description: ' . ' ' . $donnees['description'] . '</p>';
                                echo '<P class= "date"> Date de l\'evenement:' . ' ' . $donnees['date'] . '</p>';
                                } ?>
                                
                               <!-- <div class="col-sm-6">
                                    <h3>Lyon</h3> a prendre plus tard le code 
                                    <a href="https://drive.google.com/file/d/0B0M0Dx7YsUNKbEg4MW9TRmtvMS1nazBnVmFpVGYzenpCcmlZ/view?usp=sharing" target="_blank">Accès au parc</a>
                                    <a href="https://drive.google.com/file/d/0B0M0Dx7YsUNKVmg3d1piQTlwWkVNQ2FfS2FEdmgzdXYwR0hJ/view?usp=sharing" target="_blank">Le programme</a>
                                    <a href="https://drive.google.com/file/d/0B0M0Dx7YsUNKOUJJc1o1VVVhYlFmbVhaRWFZamk0SG4zdUJn/view?usp=sharing" target="_blank">Plan du village</a>

                                </div> -->
                            </div>
                            
                       <?php echo'</div>';?>        
    </body>
</html>
