<?php
require_once('inc/functions.php');
if(isset($_SESSION['admin'])){


  require_once'/admin/block.php';
}

//rendre l'affichage des resultat par meeting dinamique
//ouvertured'une connexion a la bdd

 include'connexion_bdd.php';

//aficher les erreurs
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//preparer ma requet


$reponse = $bdd->prepare('SELECT athlete.*,result.time, result.points FROM athlete inner join result on athlete.id = result.id WHERE result.id = :numresul OrDER BY result.points DESC');
     $reponse->bindValue(':numresul',$_GET['numresult'],PDO::PARAM_INT);

    $i = 1;
    //exécution de la requete
    $executeIsok=$reponse->execute();

   //on recupere la ligne
    $donnees = $reponse->fetch();
    ?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.combootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


        <title></title>
    <h1>espace modification</h1>
    </head>
    <body>
        <form class="formulaire" method="post" name='saisie' action="modif.php" >
            
            <!--j'ai utiliser le type hidden pour cacher la case qui recupere ID du contact dont on va en avoir besoin pour la modif-->
            <div> <input name='numcontact' class="input1"  type="hidden"  value="<?= $donnees['id']; ?>"/></div>
            <div> <label>prénom athlete</label><input name='' class="input1"  type="text" required placeholder="entrez le prénom" value="<?= $donnees['firstname']; ?>"/></div>
            <div><label>nom athlete</label><input name='' class=""  type="text" required placeholder="entrez le nom" value="<?= $donnees['lastname']; ?>"/></div>
               <div> <label>age athlete</label><input id='age' name='' class="input1"  type="" required placeholder="entrez age" value="<?= $donnees['birthdate']; ?>"/></div>
            <div><label>score</label><input id='points' name='points' class=""  type="" required placeholder="entrez le nouveau score" value="<?= $donnees['points']; ?>"/></div>
            <div><label>le temps</label><input  id='time' name='time' class=""  type="text" required placeholder="entrez new time" value="<?= $donnees['time']; ?>"/></div>
            <div><input type='submit' value='enregister les modifications' /></div>
            
        </form>
        <script>

            

            function calculpoints() {

            var A = document.getElementById('age').value;
            var Y = new Date().getFullYear()-A;
            var T = document.getElementById('time').value;

            if(Y>40){
                var coeff = 1.35;
            }
            else if(Y>=23 && Y<=40){
                 var coeff = 1;
             }
             else if(Y>=20 && Y<=22){
                  var coeff = 1.09;
             }
             else if(Y>=18 && Y<=19){
                  var coeff = 1.18;
             }
             else if(Y>=16 && Y<=17){
                  var coeff = 1.21;
             }
             else if(Y>=14 && Y<=15){
                  var coeff = 1.35;
             }
             else if(Y>=12 && Y<=13){
                  var coeff = 1.42;
             }
             else if (Y<=11){
                  var coeff = 1.5;
             }
             else{
                 alert("valeur inconue");
             }
            var Point = Math.round((1000/ T) * coeff);

            document.getElementById('points').value = Point;
        }
document.getElementById("time").addEventListener("change", calculpoints);

        </script>
