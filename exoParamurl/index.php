<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    p, H3 {
        color : red;
    }
    </style>
</head>
<body>
<h3>#PHP - Les paramètres d'URL</h3>
<p>##Exercice 1 Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?nom=Nemare&prenom=Jean</p>

<?php

if (isset($_GET["nom"]) && isset($_GET["prenom"])) {
echo "Bienvenue ".$_GET["prenom"]." ".$_GET["nom"].".";
} 
?>
<p> "Bienvenue ".$_GET["prenom"]." ".$_GET["nom"]." Vous n'avez pas défini votre age.";>##Exercice 2 Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?nom=Nemare&prenom=Jean</p>
<?php
if ( isset ($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["age"])) {
    echo "Bienvenue ".$_GET["prenom"]." ".$_GET["nom"].". Vous avez ".$_GET["age"]. " ans.";
} else {
    echo "Bienvenue ".$_GET["prenom"]." ".$_GET["nom"].". Vous n'avez pas défini votre age.";
}
?>
<p>##Exercice 3 Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?dateDebut=2/05/2016&dateFin=27/11/2016</p>
<?php
if(isset($_GET["dateDebut"]) && isset($_GET["dateFin"])){
    echo $_GET["dateDebut"]." et ".$_GET["dateFin"];
} else {
    echo "pas de date";
}
?>
<p>##Exercice 4 Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?langage=PHP&serveur=LAMP</p>
<?php
if (isset($_GET["langage"])&&isset($_GET["serveur"])){
    echo $_GET["langage"]." et ".$_GET["serveur"];
}
?>
<p>##Exercice 5 Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?semaine=12</p>
<?php
// if (isset($_GET)){
//     echo $_GET;
// } else {
//     echo "no";
// }

if(isset($_GET["semaine"])){
    echo $_GET["semaine"];
}
?>
<p>##Exercice 6 Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?batiment=12&salle=101</p>
<?php
if(isset($_GET["batiment"])&&isset($_GET["salle"])){
    echo $_GET["batiment"]." et ".$_GET["salle"];
}
?>
</body>
</html>