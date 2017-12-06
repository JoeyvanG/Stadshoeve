<?php
    include 'conf/dbcon.php';
    include 'conf/check.php';
    include 'header.php';
    
?>
<div class="container">
    <h1 class="titel"><?php print("Welkom ".$_SESSION['user']['voornaam']." ".$_SESSION['user']['tussenvoegsels']." ".$_SESSION['user']['achternaam']); ?></h1>
</div>
<?php

    include 'footer.php';
?>