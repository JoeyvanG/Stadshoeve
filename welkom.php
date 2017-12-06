<?php
<<<<<<< HEAD
    include 'header.php';

    include 'conf\dbcon.php';

?>
=======
include 'conf/dbcon.php';
//check.php zorgt ervoor dat een gebruiker verplicht ingelogd moet zijn, anders wordt die verwezen naar de inlogpagina
include 'conf/check.php';
include 'header.php';


//aanpassen naar de rollen die op deze pagina mogen komen. Dus als er meerdere rollen toegang hebben moet er || er tussen komen te staan.
if($_SESSION['user']) {

    ?>
>>>>>>> d2a95130458751f61b0f24bd60a841b70cf6d9cb
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
                <h2>Welkom <?php print($_SESSION['user']['voornaam']. " ". $_SESSION['user']['tussenvoegsels']." ". $_SESSION['user']['achternaam']); ?></h2><br>
                <img class="Foto_gebruiker" src="Anonynmous.png" alt="User">

                <div class="gegevens">
                    <ul>
                        <li><?php $naam_vrijwilliger ?></li>
                        <li><?php $email_vrijwilliger ?></li>
                    </ul>
                </div>
<<<<<<< HEAD

=======
>>>>>>> d2a95130458751f61b0f24bd60a841b70cf6d9cb
            </div>
            <!--
            Hier maken wij van ons berichtenveld een object dmv een div
            -->
            <div class="berichten">
<<<<<<< HEAD

                <!-- Hier kan je een bericht plaatsen -->
                <!-- Buttons -->
                <input type="button" name="bolt" value="B">
                <input type="button" name="italic" value="I">
                <input type="button" name="underlined" value="U">
                <br>
=======
                <div class="media">
                    <!-- Hier kan je een bericht plaatsen -->
                    <!-- Buttons -->
                    <input type="button" name="bolt" value="B">
                    <input type="button" name="italic" value="I">
                    <input type="button" name="underlined" value="U">
>>>>>>> d2a95130458751f61b0f24bd60a841b70cf6d9cb

                    <!-- Hier is het tekstveld waarin je de berichten kan plaatsen -->
                    <div class="form-group">
                        <textarea class="form-control" rows="5" cols="30" name="mededeling">Mededeling</textarea>
                    </div>

                <!-- Hier worden de berichten van andere vrijwilligers opgehaald -->
                <from method="post" href="mededelingen.php">
                    <div class="media-left">
                        <img src='<?php print('AfbeeldingUser()')?>' class="media-object" alt="Kan afbeelding niet laten" >
                    </div>
                </from>

                <!-- Submit button -->
                <form>
                    <input type="button" name="plaatsen bericht" value="Plaats bericht">
                </form>
                </div>

                <h2>Dit is een test stukje voor de db connectie</h2>
                <?php  $mededeling= haalBerichtOp($connectie); ?>
<<<<<<< HEAD

                <?php include 'berichten.php' ?>

=======
>>>>>>> d2a95130458751f61b0f24bd60a841b70cf6d9cb
            </div>
        </div>
    </body>
</html>
<?php
} else{
    print("<script>window.location.href='geen_toegang.php'</script>");
}

include 'footer.php';
?>