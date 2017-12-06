<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (isset($_POST['username']) && trim($_POST['username']) != '' &&
        isset($_POST['password']) && trim($_POST['password']) != '')
    {

        $maxAttempts = 3;
        $attemptsTime = 5;

        $dbinfo = "mysql:host=localhost;dbname=stadshoeve;port=3306";
        $user = "root";
        $pass = "";
        $db = new PDO($dbinfo, $user, $pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //controleren of user bestaat
        $checkUsers = "SELECT persoon_id FROM gebruiker WHERE mailadres = :username AND password = :password";
        $userStmt = $db->prepare($checkUsers);
        $userStmt->execute(array(
            ':username' => $_POST['username'],
            ':password' => hash('sha256', $_POST['password'])
        ));
        $user = $userStmt->fetchAll();

        // controleren of user te vaak verkeerd is ingelogd
        $checkTries = "SELECT username FROM loginfail WHERE DateAndTime >= NOW() - INTERVAL :attemptsTime MINUTE AND username = :username GROUP BY username, IP HAVING (COUNT(username) = :maxAttempts)";
        $triesStmt = $db->prepare($checkTries);
        $triesStmt->execute(array(
            ':username' => $_POST['username'],
            ':attemptsTime' => $attemptsTime,
            ':maxAttempts' => $maxAttempts
        ));
        $tries = $triesStmt->fetchAll();

        if (count($user) == 1 && count($tries) == 0)
        {
            //maak een sessie aan
            $stmt = $connectie->prepare("SELECT * FROM gebruiker WHERE mailadres = :mailadres ");
            $stmt->execute(array(':mailadres' => $_POST["username"]));
            $row = $stmt->fetch();

            $username = $row["mailadres"];
            $rol = $row["rol"];
            $voornaam = $row["voornaam"];
            $achternaam = $row["achternaam"];
            $tussenvoegsel = $row["tussenvoegsel"];

            $_SESSION['user'] = array('username' => $username, 'rol' => $rol, 'voornaam' => $voornaam, 'tussenvoegsels' => $tussenvoegsel, 'achternaam' => $achternaam);
            //pagina waar naartoe nadat er succesvol is ingelogd
            header('Location: welkom.php');
            die;
        }
        else
        {
            $insertTry = "INSERT INTO loginfail (username, IP, dateAndTime)
                        VALUES (:username, :IP, NOW())";
            $insertStmt = $db->prepare($insertTry);
            $insertStmt->execute(array(
                ':username' => $_POST['username'],
                ':IP' => $_SERVER['REMOTE_ADDR']
            ));
            if(count($tries) > 0)
            {
                $message = 'Je bent (tijdelijk) geblockt. Probeer het over een paar minuten opnieuw.';
            }
            else
            {
                $message = 'Onjuiste gebruikersnaam/wachtwoord. Probeer het opnieuw.';
            }
        }
        $db = NULL;
    }
}
?>