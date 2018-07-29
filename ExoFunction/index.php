<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<H3>Exos Functions</H3>

<p>#PHP - Les fonctions ##Exercice 1 Faire une fonction qui retourne true.</p>
<?php
function exo1(){
return true;
echo("Voir script.");
}
exo1();
?>

<p>##Exercice 2 Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.</p>
    <?php
    function exo2($a){
        echo($a);
    }
    exo2("This is a test.")
    ?>

<p>##Exercice 3 Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines</p>
<?php
function exo3($a,$b){
echo($a.$b);
}
exo3("TEST1 ","test2")
?>

<p>##Exercice 4 Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :

Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
Les deux nombres sont identiques si les deux nombres sont égaux
</p>
<?php
function exo4($a,$b){
if ($a > $b) {
    echo($a." est plus grand que ". $b);
} elseif ($a < $b) {
    echo($a." est plus petit que ".$b);
} else {
    echo($a. " est indentique à ".$b);
}
}
exo4(4,55)
?>

<p>##Exercice 5 Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.</p>
<?php
function exo5($a,$b){
echo($a.$b);
}
exo5('Sum',41)
?>

<p>##Exercice 6 Faire une fonction qui prend trois paramètres : nom, prenom et age. Elle doit renvoyer une chaine de la forme :
"Bonjour" + nom + prenom + ",tu as" + age + "ans".</p>

<?php
function exo6($nom,$prenom,$age){
echo("Bonjour ".$nom.$prenom." tu as ".$age." ans");
}
exo6("Binant"," Guillaume",30)
?>

<p>##Exercice 7 Faire une fonction qui prend deux paramètres : age et genre. Le paramètre genre peut prendre comme valeur :

Homme
Femme

La fonction doit renvoyer en fonction des paramètres :

Vous êtes un homme et vous êtes majeur
Vous êtes un homme et vous êtes mineur
Vous êtes une femme et vous êtes majeur
Vous êtes une femme et vous êtes mineur

Gérer tous les cas.</p>
<?php
function exo7($age, $genre){
if ($age < 18 && $genre === "girl") {
    echo('You are '.$age." you'r MINOR and you'r a ".$genre); 
} elseif ($age >= 18 && $genre =="girl") {
    echo('You are '.$age." you'r MAJOR and you'r a ".$genre);
} elseif ($age < 18 && $genre === "boy") {
    echo('You are '.$age." you'r MINOR and you'r a ".$genre);
} else {
    echo('You are '.$age." you'r MAJOR and you'r a ".$genre);
}
}
exo7(18,"boy");
?>

<p>##Exercice 8 Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
Tous les paramètres doivent avoir une valeur par défaut.</p>
<?php
function exo8($a=1,$b=2,$c=3){
    echo("calcul : ".$a."+".$b."+".$c."<br/>");
echo($a+$b+$c);
}
exo8(2,3,4)
?>
</body>
</html>