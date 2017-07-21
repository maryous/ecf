<!DOCTYPE html>
<form>
    <input name='' value='modifier la liste'/>
    <input type='submit'value='enregistrer les modification'>
</form>


         
      
        <?php 
        
//rendre l'affichage des resultat par meeting dinamique
//ouvertured'une connexion a la bdd

 $bdd = new PDO('mysql:host=localhost;dbname=athletik;charset=utf8', 'root', 'aase89');
 
 //aficher les erreurs
 $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 //preparer ma requet
 
 
 $reponse = $bdd->prepare('SELECT athlete.*,result.time, result.points FROM athlete inner join result on athlete.id = result.id WHERE result.meeting_id = :id OrDER BY result.points DESC');
             $reponse->bindValue(':id',$_GET['numevent'],PDO::PARAM_INT);
            
            $i = 1;
            echo'<div class="result">';
            $executeIsok=$reponse->execute();
            
           echo'<h2>le classement par course !</h2>';
           echo'<h3>le classement de la course ' .$_GET["name"].'</h3>';
            
                    
            
            while ($donnees = $reponse->fetch()) {

               echo '<li class="li_result">place numéro ' . $i++ . '  ==>' . $donnees['firstname'] . ' ' . $donnees['lastname'] .'  avec un score: '.$donnees['points'].' //   '.$donnees['time']. '</li>';


               echo'</div>';
           }
 

 

 
 
 
         
 
    
