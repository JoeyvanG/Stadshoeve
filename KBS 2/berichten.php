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
            <h1 class="titel">Titel</h1>
            <!--
            Hier maken wij van ons berichtenveld een object dmv een div
            -->
            <div class="berichten">
                <form method="post" href="Template.php">
                    <input type="text" name="bericht"><br>
                    <input type="submit" name="plaatsen" value="Plaat bericht"><br>
                </form>
            </div>
        </div>
    </body>
</html>
<?php

    include 'footer.php';
?>