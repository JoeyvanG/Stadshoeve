<?php
    include 'conf/dbcon.php';
    //check.php zorgt ervoor dat een gebruiker verplicht ingelogd moet zijn, anders wordt die verwezen naar de inlogpagina
    include 'conf/check.php';
    include 'header.php';

    //aanpassen naar de rollen die op deze pagina mogen komen. Dus als er meerdere rollen toegang hebben moet er || er tussen komen te staan.
    if($_SESSION['user']['rol'] == "Administrator") {
    
?>

        <div class="container">
            <h1 class="titel"></h1>
        </div>

<?php
    } else{
        print("<script>window.location.href='geen_toegang.php'</script>");
    }

    include 'footer.php';
?>