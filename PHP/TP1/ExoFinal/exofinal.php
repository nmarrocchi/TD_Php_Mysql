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