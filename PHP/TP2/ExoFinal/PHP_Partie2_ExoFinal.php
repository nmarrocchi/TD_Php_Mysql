<?php

$Accueil = "../../../";
$ExoHTML = "../../../HTML/";
$ExoCSS = "../../../CSS/";
$ExoPHP = "../../";
$ExoBDD = "../../../BDD/";
                $ExoSQL = "../../../SQL/";

echo('<link rel="stylesheet" href="style.css" type="text/css">'); 
include('../../../menu.php');

// Cette fonction affiche un tableau et une fois le tableau rempli il vérifie le mot de passe entrer 
function formulaire() {
    ?> <html><form method="POST">
    <input type="password" name="password" />
    <input type="submit" name="valider" />
    </form></html>
    <?php

    if(isset($_POST['valider'])) {
        $password = htmlspecialchars($_POST['password']);
        if(!empty($password)) {
            if($password == "1234") {
                echo 'Vous avez le bon mot de passe. Voici le lien vers la page : google.fr';
            } else {
                echo 'Mauvais mot de passe';
            }
        } else {
            echo 'Veuillez entrer un mot de passe';
        }
    }
}


?>
<!doctype html>
<html lang="fr">
<head>
<title>Exo Final</title>
</head>
<body>

<?php formulaire(); ?>


</body>
</html>

<?php 

// code source de la page 
highlight_file(__FILE__); 

?>