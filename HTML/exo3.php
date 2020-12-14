<!DOCTYPE html>
<html lang="fr"> 
    
    <head>
        <meta charset ="UTF-8">
    </head>

    <?php
                $Accueil = "../";
                $ExoHTML = "";
                $ExoCSS = "../CSS/";
                $ExoPHP = "../PHP/";
                $ExoBDD = "../BDD/";
                $ExoSQL = "../SQL/";

            ?>
 
 <body>
    <style> body{margin:0%;} </style>
    
        <?php include('../menu.php'); ?>

        <table>
            <tr>
                <td>   </td>
                <td>1er Semestre</td>
                <td>2ème Semestre</td>
            </tr>
            <tr>
                <td rowspan="3"> SIO1</td>
                <td>SL1 , SL2 , SL3 , SL4</td>
                <td>SL5 , SL6</td>
               
            </tr>

            <tr>
                <td>SLAM</td>
                <td>SISR</td>
            </tr>

            <tr>
                <td>SLAM1 , SLAM2</td>
                <td>SISR1 , SISR2</td>
            </tr>
            <tr>
                <td rowspan="3"> SIO2</td>
                <td colspan="2">SL7</td>
               
            </tr>

            <tr>
                <td>SLAM</td>
                <td>SISR</td>
            </tr>

            <tr>
                <td>SLAM3 , SLAM4 , SLAM5</td>
                <td>SISR3 , SISR4 , SISR5</td>
            </tr>

        </table>
    </body>

</html>