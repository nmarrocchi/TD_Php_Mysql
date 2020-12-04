<?php session_start();

$_SESSION['nom'] = $_GET['nom'];
$_SESSION['age'] = $_GET['age'];

$Accueil = "../../../";
$ExoHTML = "../../../HTML/";
$ExoCSS = "../../../CSS/";
$ExoPHP = "../../";

echo('<link rel="stylesheet" href="style.css" type="text/css">'); 
include('../../../menu.php');

echo $_SESSION['nom'];
echo $_SESSION['age'];

highlight_file(__FILE__);