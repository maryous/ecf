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
        <form action='ajout_event.php'name='ajout' method='post'class='formulaire'>
            <p><label>lieux: <input name='lieux1' class="input1" placeholder="entrez le lieu de votre evenement" type="text" required/></label></p>
            
            <p><label> description: </label></p>
            <textarea name="description1" id="description" WRAP = "virtual"></textarea>
            <p><label>date de l'évenement: <input name='date1' class="date1" placeholder="entrez une date" type="date" required></p></label>
            <input type="submit" name="valider" value="ajouter"/>
            <a href="index.php">retour à la liste</a>
        </form>
    </body>
</html>