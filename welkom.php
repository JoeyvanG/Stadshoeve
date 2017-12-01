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
                <h2>Welkom</h2><br>
                <img class="Foto_gebruiker" src="Anonynmous.png" alt="User">
                <div class="gegevens">
                    <ul>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
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