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
</head>
<body>

<h1>User page !</h1>

<h3>Nom en dessous</h3>
<?php
$_COOKIE["cookie-login"] = "Joe2";
echo $_COOKIE["cookie-login"];

?>
</body>
</html>