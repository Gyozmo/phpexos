<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    p {
        color : red;
    }
    </style>
</head>
<body>
    
<p>
#PHP - Les dates Pour tous les exercices, vous pouvez utiliser le site http://php.net
N'hesitez pas à faire des pages avec du HTML/CSS 
</p>
<br>
<p>
##Exercice 1 Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)
</p>
<br>
<?php
echo date("d/m/Y");
?>
<p>
##Exercice 2 Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)
</p>
<br>
<?php
echo date ("d-m-Y")
?>
<p>
##Exercice 3 Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
Bonus : Le faire en français.
</p>
<br>
<?php
setlocale (LC_TIME, 'fr_FR.utf8','fra');
echo (strftime("%A %d %B %Y"));
?>
<p>
##Exercice 4 Afficher le timestamp du jour.
Afficher le timestamp du mardi 2 août 2016 à 15h00.
</p>
<br>
<?php
$d = mktime(15, 0, 0, 8, 2, 2016);
echo date("D d M Y h:i:s",$d)."<br/>";
echo $d;
?>
<p>
##Exercice 5 Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.
</p>
<br>
<?php
$d = mktime(0, 0, 0, 5, 16, 2016);
echo date("D d M Y H:i:s",$d)."<br/>";
?>
<p>
##Exercice 6 Afficher le nombre de jour dans le mois de février de l'année 2016.
</p>
<br>
<?php

?>
<p>
##Exercice 7 Afficher la date du jour + 20 jours.
</p>
<br>
<?php

?>
<p>
##Exercice 8 Afficher la date du jour - 22 jours
</p>
<br>
<?php

?>
<p>
##TP Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
En fonction des choix, afficher un calendrier comme celui ci :
Calendrier
</p>
<?php

?>

</body>
</html>