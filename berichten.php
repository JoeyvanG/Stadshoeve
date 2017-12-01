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
            Hier maken wij van ons berichtenveld een object dmv een div
            -->
            <div class="berichten">
                <!-- Hier kan je een bericht plaatsen -->
                <!-- Buttons -->
                <input type="button" name="bolt" value="B">
                <input type="button" name="italic" value="I">
                <input type="button" name="underlined" value="U">
                <br>

                <!-- Text area -->
                <textarea class="text_edit" id="my_text"></textarea>
                <br />

                <!-- Submit button -->
                <form>
                <input type="button" name="plaatsen bericht" value="Plaats bericht">
                </form>

                <!-- Hier worden de berichten van andere vrijwilligers opgehaald -->
                <from method="post" href="mededelingen.php">
                    <img src='<?php print('AfbeeldingUser()')?>' alt="Kan afbeelding niet laten" >
                    <textarea rows="5" cols="140" name="mededeling">Mededeling</textarea>
                </from>
            </div>
        </div>
    </body>
</html>
