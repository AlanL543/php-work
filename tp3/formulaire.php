<?php
session_start();
if (isset($_COOKIE["nom"])){
	header('Location: /recoAuto.php');
	exit();
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?=$title?></title>
</head>
<body>
	<form method="POST" action="resultats.php">
<label for="nom">Nom : </label>
<input id="nom" type="text" name="nom" placeholder="Saisissez votre nom">
<label for="reco">Reconnexion automatique : </label>
<input name="reco" type="checkbox" checked>
<input type="submit" value="Connexion">
	</form>
</body>
</html>
