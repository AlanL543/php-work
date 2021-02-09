<?php
session_start();
$_SESSION["nom"]=$_POST["nom"];
if (isset($_POST["reco"])){
  setcookie ("nom", $_SESSION["nom"], time() + 300);
}
echo "Voici votre nom : ".$_SESSION["nom"];
 ?>
