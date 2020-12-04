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

            ?>
   
   <body>
    <style> body{margin:0%;} </style>
    
        <?php include('../menu.php'); ?>

       <div id="Formulaire">

        <table>
            <tr>
                <td>
                    <t>Civilité : </t>
                </td>
                <td>
                    <input type= "radio" name="civilité" value="Mr"> Mr
                    <input type= "radio" name="civilité" value="MmeouMlle"> Mme ou Mlle
                </td>
            </tr>
            <tr>
                <td>
                    <t>Prénom : </t>
                </td>
                <td>
                    <input type="text" name="name" value="">
                </td>
            </tr>
            <tr>
                <td>
                    <t>Nom : </t>
                </td>
                <td>
                    <input type="text" name="firstname" value="">
                </td>
            </tr>
            <tr>
                <td>
                    <t>Date de naissance : </t>
                </td>
                <td>
                    <select name="day">
                        <option></option>
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                        <option>05</option>
                    </select>

                     <select name="month">
                        <option></option>
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                        <option>05</option>
                    </select>
          
                    <t>Année : </t>
                        <input type="text" name="Yearofbirth" value="">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <t>Numéro : </t>
                    <input type="text" name="Nb" value="">
                    <t>Rue : </t>
                    <input type="text" name="Street" value="">
                </td>
            </tr>
            <tr>
                <td>Adresse : </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <t>Code Postal : </t>
                    <input type="text" name="PostalCode" value="">
                    <t>Ville : </t>
                    <input type="text" name="Town" value="">
                </td>
            </tr>
            <tr>
                <td><t>Téléphone : </t></td>
                <td><input type="text" name="Phone" value=""></td>
            </tr>
            <tr>
                <td><t>E-mail : </t></td>
                <td><input type="text" name="Mail" value=""></td>
            </tr>

            <tr>
                <td>
                    <input type="submit" value="Envoyer">
                    <input type="submit" value="Remettre à zéro">
                </td>
            </tr>


        </table>

    </body>

</html>