<?php
    include 'header.php';
    
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container">
            <!--
            Dit is het welkoms bericht
            -->
            <div class="welkom">
                <h2>Welkom <?php$naam_vrijwilliger?></h2><br>
                <img class="Foto_gebruiker" src="Anonynmous.png" alt="User">
                <div class="gegevens">
                    <ul>
                        <li><?php $naam_vrijwilliger ?></li>
                        <li><?php $email_vrijwilliger ?></li>
                    </ul>
                </div>
            </div>
            <!--
            Hier kan de vrijwilliger zijn persoonlijke bericten zien
            -->
            <div class="persoonlijke_berichten">
                <h3>Persoonlijke berichten</h3><br>
                <img class="berichten_icoon" src="berichten_icoon.png">
                <ul>
                    <li><?php haalBerichtOp() ?></li>
                </ul>


            </div>
            <!--
            Hier maken wij van ons berichtenveld een object dmv een div
            -->
            <div class="berichten">
                <iframe src="welkom.php">
                    <p>De berichten kunnen niet worden geladen.</p>
                </iframe>
            </div>
        </div>
    </body>
</html>
<?php

    include 'footer.php';
?>