<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>hello1</h1>

<h3>Exo 1 : Loop</h3>
<p>#PHP - Les boucles ##Exercice 1 Créer une variable et l'initialiser à 0.
Tant que cette variable n'atteint pas 10, il faut : 
    l'afficher
    l'incrementer
</p>
<br>
<p>Résultat : </p>
<?php
for ($i=0; $i < 11 ; $i++) { 
    echo($i);
}
?>

<p>##Exercice 2 Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas supérieur à 20 :

    multiplier la première variable avec la deuxième
    afficher le résultat
    incrementer la première variable
</p>
<?php
function exo2(){
    $x = 0;
    $y = rand(1, 100);
    echo('Resultats : <br/>');
    for ($x; $x<21; $x++){
        $x *= $y;
       echo($x."<br/>");
    }
}
exo2()

?>

<p>##Exercice 3 Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
Tant que la première variable n'est pas inférieur ou égale à 10 :

multiplier la première variable avec la deuxième
afficher le résultat
décrémenter la première variable
</p>
<?php
function exo3(){
    $x = 100;
    $y = rand(1,100);
    for ($x; $x>10; $x--){
        
        echo $x*$y."\n";
    };
}
exo3();
?>

<p>##Exercice 4 Créer une variable et l'initialiser à 1.
Tant que cette variable n'atteint pas 10, il faut :

    l'afficher
    l'incrementer de la moitié de sa valeur
</p>

<?php
function exo4(){
    $x = 1;
    for ($x; $x<10;  $x+=($x/2)){
        echo($x.'<br/>');
    }
}
exo4();
?>
<p>##Exercice 5 En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.</p>
<?php
function exo5(){
    $x = 1;
    for ($x=0; $x <= 15; $x++){
        echo(" ".$x." On y arrive presque ");
    }
}
exo5()
?>
<p>##Exercice 6 En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.</p>
<?php
function exo6(){
    $x=20;
    for ($x; $x != 0; $x--){
        echo(" ".$x." C'est presque bon ");
    }    
}
exo6()
?>

<p>##Exercice 7 En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.</p>
<?php
function exo7(){
    $x=1;
    for ($x;$x<100;$x+=15){
        echo(" ". $x . " On tient le bon bout. ");
    }
}
exo7()
?>
<p>##Exercice 8 En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.</p>
<?php
function exo8(){
    $x=200;
    for ($x;$x>=0;$x-=12){
        echo(" ".$x." Enfin !!!! ");
    }
}
exo8()
?>

    
</body>
</html>