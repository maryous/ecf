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
        <form class="" method="post" name='' action="ajout_course.php" >
            <label>nom : <input name='nom_ath' class="input1" placeholder="entrez le nom de l'athlete" type="text" required></label>
            <label>prenom <input name='prenom_ath' class="image"  type="text" required /></label></p>

            <label>age: <input name='age_ath' class="acteur1" placeholder="entrez acteur" type="text" required></label>

            <label>score: <input name='score' class="date1" placeholder="entrez une date" type="number" required></label>
                
            <input type="submit" name="valider" value="ajouter"/>
            <a href="index.php">retour à la liste</a>

        </form>
    </body>
</html>
