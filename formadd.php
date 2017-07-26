<!DOCTYPE html>
<!--
formulaire pour ajouter une course
-->
<html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" href="style.css">
        <title></title>
    </head>
    <body>
        <h1>ajouter une course</h1>
        <form action='ajout_event.php'name='ajout' method='post'class='formulaire'>
            <p><label>lieux: <input name='lieux1' class="input1" placeholder="entrez le lieu de votre evenement" type="text" required/></label></p>
            
            <p><label> description: </label></p>
            <textarea name="description1" id="description" WRAP = "virtual"></textarea>
            <p><label>date de l'évenement: <input name='date1' class="date1" placeholder="entrez une date" type="date" required></p></label>
            <input type="submit" name="valider" value="ajouter"/>
            <a href="index.php"><img src="image/home.gif"></a>
        </form>
    </body>
</html>