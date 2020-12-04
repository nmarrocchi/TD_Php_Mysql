<?php
                $Accueil = "../../../";
                $ExoHTML = "../../../HTML/";
                $ExoCSS = "../../../CSS/";
                $ExoPHP = "../../";

echo('<link rel="stylesheet" href="style.css" type="text/css">'); 
include('../../../menu.php');
    $NombreAleatoire = rand ( 0 , 100 );

        if($NombreAleatoire%2 == 1){
            echo('<div class="pair"> '.$NombreAleatoire.' est pair</div>');
        }
        else{
            echo('<div class="impair"> '.$NombreAleatoire.' est impair</div>');
        }
highlight_file(__FILE__);