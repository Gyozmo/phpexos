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

<H3>#PHP - Les formulaires Vous devez agrémenter votre code avec de l'HTML 5 valide (DOCTYPE, ....)</H3>
<br>
<p>##Exercice 1 Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode GET.</p>
<br>
<h5>methode GET</h5>
<br>
<form action="/user.php" method="get">
<input type="text" name="usertxt">
<button type="submit">Submit</button>
</form>
<br>
<?php 
?>

<p>##Exercice 2 Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la 
page user.php avec la méthode POST.</p>
<br>
<h5>methode post</h5>
<br>

<form action="/user.php" method="post">
<input type="text" name="usertxt2">
<button type="submit">Submit2</button>
</form>

<br>

<?php 

?>

<p>##Exercice 3 Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis.</p>

<?php 

?>

<p>##Exercice 4 Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.</p>





<p>##Exercice 5 Créer un formulaire sur la page index.php avec :

Une liste déroulante pour la civilité (Mr ou Mme)
Un champ texte pour le nom
Un champ texte pour le prénom

Ce formulaire doit rediriger vers la page index.php.
Vous avez le choix de la méthode.</p>






<p>##Exercice 6 Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.
Utiliser qu'une seule page.</p>
<?php 
if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["civil"])){
    echo $_POST["civil"]." ".$_POST["nom"]." ".$_POST["prenom"]." ".$_POST["file"];
    if(strpos($_POST["file"],".pdf")){
        echo " is pdf file !!";
    } else {
        echo " isnt pdf file";
    }
} else {

?>
<form action="/index.php" method="post">
<select name="civil" id="" name="civil">
<option value="Mr" name ="monsieur">Mr</option>
<option value="Mme" name="madame">Mme</option>
</select>
<label for="prenom">Prenom</label>
<input type="text" name="prenom">
<label for="nom">Nom</label>
<input type="text" name="nom">
<input type="file" name="file" id="">
<button type="submit">Submit</button>
</form>


<?php 
}
?>

<p>##Exercice 7 Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.</p>

<?php 

?>

<p>##Exercice 8 Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier que le fichier transmis est bien un fichier pdf.</p>

<?php 

?>

</body>
</html>