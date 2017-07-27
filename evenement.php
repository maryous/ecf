
<!DOCTYPE html>
<?php 
include'class.php';
$Affichevent= new Affichevent();
?>
<!--                          traitement de l'affichage des courses       ---------------------->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title></title>
    </head>
    <body>
        <div class="event-is-coming" id='ancre'>
            
        
         <div class=eve >
        <?php $Affichevent->afficheevent() ?>
         </div>
    </body>
</html>
