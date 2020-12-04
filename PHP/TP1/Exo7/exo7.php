<?php
session_start();
$_SESSION['nom'] = 0;
$_SESSION['age'] = 0;

$Accueil = "../../../";
$ExoHTML = "../../../HTML/";
$ExoCSS = "../../../CSS/";
$ExoPHP = "../../";

echo('<link rel="stylesheet" href="style.css" type="text/css">'); 
include('../../../menu.php');

echo('

<form action="Formulaire.php" method="get">

 <p>Votre nom : <input type="text" name="nom" /></p>
 <p>Votre âge : <input type="text" name="age" /></p>

 <p><input type="submit" value="OK"></p>

</form> ');

highlight_file(__FILE__);
?>
