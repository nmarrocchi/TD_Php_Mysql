<!DOCTYPE php>
    <html>
        <head>
            <title>TP2 - Exo 2</title>
        </head>

        <body>

<?php 
session_start();
echo('<p><button id="return"><a href="../../../index.html">retour</a></button></p>');
include('table.php'); 
?>

        </body>

<!-- Style dans le fichier HTML pour éviter un fichier CSS pour juste 2 lignes-->
<style>

    table{
        border: solid black 1px;
        margin: 5%;
        text-align: center;
    }
    table td{
        border: solid green 1px;
    }

</style>
<!-- Fin du code CSS -->

    </html>