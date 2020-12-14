<?php
                $Accueil = "../../../";
                $ExoHTML = "../../../HTML/";
                $ExoCSS = "../../../CSS/";
                $ExoPHP = "../../";
                $ExoBDD = "../../../BDD/";
                $ExoSQL = "../../../SQL/";

echo('<link rel="stylesheet" href="style.css" type="text/css">'); 
include('../../../menu.php');


$i = 0;
$tab = array ('5', '4', '3', '2', '1');
echo ("<p>Exo 2.1</p>");

echo ("<table>");

for ($i = 0; $i < 5; $i++)
{
    echo ("
    <tr>
        <td>
        $tab[$i]
        </td>
    </tr>");
}

echo ("</table>");

echo("<p>Exo 2.2</p>");

$infos = array (
    'Nom' => 'Pi',
    'Prenom' => 'Raspberry',
    'MDP' => 'root');

foreach($infos as $element)
{
    echo $element . ' ';
}
highlight_file(__FILE__);