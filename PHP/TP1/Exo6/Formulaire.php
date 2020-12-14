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


Bonjour <?php echo htmlspecialchars($_GET['nom']); ?>.
Vous avez <?php echo (int)$_GET['age']; ?> ans.
<?php
highlight_file(__FILE__);