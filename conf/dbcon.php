<?php
    $db ="mysql:host=localhost;dbname=stadshoeve;port=3306";
    $user = "root";
    $pass = "";
    $connectie = new PDO($db, $user, $pass);
    
    function gebruikersbeheer($connectie){
                $stmt = $connectie->prepare("SELECT * FROM gebruiker");
                $stmt->execute();

        ?>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>        <button type="button" class="btn btn-default btn-sm" onclick="window.location.href='gebruikersbeheer_toevoegen.php'">
                                    <span class="glyphicon glyphicon-plus"></span> Toevoegen
                                </button>
                            </th>
                        </tr>
                        <tr>
                            <th>Persoonsnummer</th>
                            <th>Voornaam</th>
                            <th>Tussenvoegsels</th>
                            <th>Achternaam</th>
                            <th>Emailadres</th>
                            <th>Telefoonnummer</th>
                            <th>Rol</th>
                            <th>Actie</th>
                        </tr>
                        </thead>
                        <tbody>
        <?php
                
                while ($row = $stmt->fetch()) 
                {
                        $persoon_id = $row["persoon_id"];
                        $voornaam = $row["voornaam"];
                        $tussenvoegsels = $row["tussenvoegsel"];
                        $achternaam = $row["achternaam"];
                        $mail = $row["mailadres"];
                        $telefoonnummer = $row["telefoonnummer"];
                        $rol = $row["rol"];
                        print("<tr>"
                                . "<td>".$persoon_id."</td>"
                                . "<td>".$voornaam."</td>"
                                . "<td>".$tussenvoegsels."</td>"
                                . "<td>".$achternaam."</td>"
                                . "<td>".$mail."</td>"
                                . "<td>".$telefoonnummer."</td>"
                                . "<td>".$rol."</td>"
                                . "<td>        
                                                <button type='button' class='btn btn-default btn-sm' onclick='change($persoon_id)'>
                                                <span class='glyphicon glyphicon-edit'></span>
                                                </button>
                                                <button type='button' class='btn btn-default btn-sm' onclick='confirmation($persoon_id)'>
                                                <span class='glyphicon glyphicon-trash'></span>
                                                </button>
                                   </td>"
                                . "</tr>"
                            );
                }
                ?>
                        </tbody>
                    </table>
                <?php
                $connectie = NULL;
    }

    function gebruikersbeheer_wijzig_check_rol($rol){
        if($rol =="Administrator"){
            print("
                        <option value='Administrator'>Administrator</option>
                        <option value='Klant'>Klant</option>
                        <option value='Supervisor'>Supervisor</option>
                        <option value='Vrijwilliger'>Vrijwilliger</option>
                      ");

        } else {
            if($rol == "Supervisor"){
                print("
                        <option value='Supervisor'>Supervisor</option>
                        <option value='Administrator'>Administrator</option>
                        <option value='Klant'>Klant</option>
                        <option value='Vrijwilliger'>Vrijwilliger</option>
                      ");
            } else{
                if($rol == "Klant"){
                    print("
                        <option value='Klant'>Klant</option>
                        <option value='Administrator'>Administrator</option>
                        <option value='Supervisor'>Supervisor</option>
                        <option value='Vrijwilliger'>Vrijwilliger</option>
                      ");
                } else{
                    if($rol == "Vrijwilliger"){
                        print("
                        <option value='Vrijwilliger'>Vrijwilliger</option> 
                        <option value='Administrator'>Administrator</option>
                        <option value='Klant'>Klant</option>
                        <option value='Supervisor'>Supervisor</option>
                      ");
                    } else{
                            print("
                        <option value='Vrijwilliger'>Vrijwilliger</option> 
                        <option value='Klant'>Klant</option>
                        <option value='Supervisor'>Supervisor</option>
                        <option value='Administrator'>Administrator</option>
                      ");
                    }
                }
            }
        }
    }

    function gebruikersbeheer_wijzig_soort_klant($soort_klant){
        if ($soort_klant == "Z") {
            print("
                                            <option value='Z'>Zakelijk</option>
                                            <option value='P'>Particulier</option>
                                            <option value=''></option>
                                ");
        } elseif ($soort_klant == "P") {
            print("
                                            <option value='P'>Particulier</option>
                                            <option value='Z'>Zakelijk</option>
                                            <option value=''></option>
                                ");
        } else {
            print("
                                            <option value=''></option>
                                            <option value='Z'>Zakelijk</option>
                                            <option value='P'>Particulier</option>
                                ");
        }
    }

function haalBerichtOp($connectie){
    $stmt= $connectie-> prepare("Select m.bericht, g.voornaam, g.tussenvoegsel, g.achternaam, g.foto FROM mededeling m JOIN gebruiker g ON m.persoon_id= g.persoon_id ORDER BY m.datum DESC, m.tijd DESC;");
    $stmt->execute();

    while($row= $stmt->fetch()) {
        $userFoto = $row["foto"];
        $voornaam = $row["voornaam"];
        $tussenvoegsel = $row["tussenvoegsel"];
        $achternaam = $row["achternaam"];
        $bericht = $row["bericht"];
        print("<div class='gebruiker'>
                $userFoto $voornaam $tussenvoegsel $achternaam
             </div>");
        print("<div class='mededeling'>
                $bericht
                </div>");
    }
    $connectie= NULL;


}

function CheckReactie($connectie) {
    $stmt= $connectie-> prepare("SELECT ");
}

function HaalReactieOp($connectie) {
    $stmt= $connectie-> prepare("SELECT b.bericht, gr.foto, gr.voornaam, gr.tussenvoegsel, gr.achternaam, b.datum, b.tijd
                                FROM mededeling b
                                LEFT JOIN mededeling r ON b.reactie= r.bericht_id
                                JOIN gebruiker gr ON b.persoon_id= gr.persoon_id
                                ORDER BY r.tijd ASC, r.datum ASC");
    $stmt-> execute();

    while($row= $stmt->fetch()) {
        $userFoto = $row["foto"];
        $voornaam = $row["voornaam"];
        $tussenvoegsel = $row["tussenvoegsel"];
        $achternaam = $row["achternaam"];
        $bericht = $row["bericht"];
        print("<div class='gebruiker'>
                $userFoto $voornaam $tussenvoegsel $achternaam
             </div>");
        print("<div class='mededeling'>
                $bericht
                </div>");
    }
}

    ?>