
<?php
  session_start(); 
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    h3, p {
        color : red;
    }
    </style>
</head>
<body>
    <h3>#PHP - Variables superglobales, sessions et cookies Dans tous les exercices, il faudra faire une page HTML 5 valide et soigner son CSS. </h3>
    <p>##Exercice 1 Faire une page HTML permettant de donner à l'utilisateur :
son User Agent
son adresse ip
le nom du serveur</p>

<?php
echo $_SERVER["HTTP_USER_AGENT"]."<br/>".$_SERVER["REMOTE_ADDR"]."<br/>".$_SERVER["SERVER_NAME"];
?>

    <p>##Exercice 2 Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables nom, prenom et age grâce aux sessions. Ces variables auront été définies directement dans le code.
Il faudra afficher le contenu de ces variables sur la deuxième page.</p>


<a href="/user.php">Ici !</a>
<?php
$_SESSION['name'] = "joe";

?>

    <p>##Exercice 3 Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.</p>
<?php
// setcookie("cookie-login", $_POST["login"]);
// setcookie("cookie-pass", $_POST["password"]);

?>
<form action="/" method="post">
login<input name="login" type="text">
password <input name="password" type="text">
<button type="submit">submit</button>
</form>

<?php

?>

    <p>##Exercice 4 Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.</p>
<br>

<?php
setcookie("cookie-login", $_POST["login"]);
setcookie("cookie-pass", $_POST["password"]);
?>
<a href="/user.php">ici !</a>

    <p>##Exercice 5 Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.</p>
<a href="/user2.php">ici !</a>
<?php

?>

</body>
</html>