<?php

    
    include 'conf/dbcon.php';
    include 'conf/login.php';
    include 'header_login.php';
    
?>
<div class="container">
    <div class="login">
        <h1 class="title">Login</h1>
    </div>

    <form method="POST" action="">

            <div class="form-group">
                <input type="email" class="form-control" id="usr" name="username" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="pwd" name="password" placeholder="Wachtwoord" required>
            </div>
                <?php
                    if (isset($message))
                    {
                    ?>
                        <div class="alert alert-danger">
                        <?php echo $message; ?>
                        </div>
                    <?php
                    }
                ?>
            <div>
                <button type="submit" class="btn btn-success" name="verstuur">Inloggen</button>
            </div>
    </form>
</div>
<?php

    include 'footer.php';
?>