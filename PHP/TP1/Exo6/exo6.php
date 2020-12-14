<?php
$Accueil = "../../../";
                $ExoHTML = "../../../HTML/";
                $ExoCSS = "../../../CSS/";
                $ExoPHP = "../../";
                $ExoBDD = "../../../BDD/";
                $ExoSQL = "../../../SQL/";

echo('<link rel="stylesheet" href="style.css" type="text/css">'); 
include('../../../menu.php');
?>


<form action="Formulaire.php" method="get">

 <p>Votre nom : <input type="text" name="nom" /></p>
 <p>Votre âge : <input type="text" name="age" /></p>

 <p><input type="submit" value="OK"></p>

</form>

<?php

highlight_file(__FILE__);
