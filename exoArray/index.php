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
<h1>#PHP - Les tableaux </h1>
<p>##Exercice 1 Créer un tableau mois et l'initialiser avec les valeurs suivantes :

janvier février mars avril mai juin juillet aout septembre octobre novembre décembre
</p>

<?php
$exo1 = ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre"];
echo('<br/>');
echo("var dump sur l'array");
echo('<br/>');
var_dump($exo1)
?>

<p>##Exercice 2 Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.</p>

<?php
echo $exo1[2]
?>

<p>##Exercice 3 Avec le tableau de l'exercice , afficher la valeur de l'index 5.</p>
<?php
echo $exo1[4];
?>
<p>##Exercice 4 Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.</p>
<?php
$exo1[7] = "Août";
echo $exo1[7]
?>
<p>##Exercice 5 Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.</p>
<?php
$hdf = ["02"=>"Aisne","59"=> "Nord","60"=> "Oise","62"=> "Pas-de-Calais","80"=> "Somme"];
var_dump ($hdf)
?>
<p>##Exercice 6 Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.</p>
<?php
echo $hdf[59]
?>
<p>##Exercice 7 Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.</p>
<?php
$hdf+=["51"=>"Marne"];
echo $hdf[51];
?>
<p>##Exercice 8 Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.</p>
<?php
for ($i = 0; $i<sizeof($exo1); $i++){
    echo($exo1[$i]." ");
}
?>
<p>##Exercice 9 Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.</p>
<?php
foreach($hdf as $key => $value){
    echo $value." ";
}
?>
<p>##Exercice 10 Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.
Cela pourra être, par exemple, de la forme : "Le département" + nom_departement + "a le numéro" + num_departement</p>
<?php
foreach($hdf as $key => $value){
    echo "Le departement ".$value." a pour numero ".$key."<br/>";
}
?>  
</body>
</html>