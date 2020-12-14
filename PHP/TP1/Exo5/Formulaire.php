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

Bonjour <?php echo htmlspecialchars($_POST['nom']); ?>.
Vous avez <?php echo (int)$_POST['age']; ?> ans.
<?php

highlight_file(__FILE__);