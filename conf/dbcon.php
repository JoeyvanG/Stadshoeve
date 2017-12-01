<?php
    $db ="mysql:host=localhost;dbname=kbs;port=8889";
    $user = "root";
    $pass = "root";
    $connectie = new PDO($db, $user, $pass);
    
    function gebruikersbeheer($connectie){
                $stmt = $connectie->prepare("SELECT * FROM users");
                $stmt->execute();
                
                while ($row = $stmt->fetch()) 
                {
                        $user_id = $row["user_id"];
                        $mail = $row["username"];
                        $rol = $row["rol"];
                        print("<tr>"
                                . "<td>".$user_id."</td>"
                                . "<td></td><td></td>"
                                . "<td>".$mail."</td>"
                                . "<td></td>"
                                . "<td>".$rol."</td>"
                                . "<td>        <button type='button' class='btn btn-default btn-sm' >
                                                <span class='glyphicon glyphicon-edit'></span>
                                                </button>
                                                <button type='button' class='btn btn-default btn-sm' onclick='confirmation($user_id)'>
                                                <span class='glyphicon glyphicon-trash'></span>
                                                </button>
                                   </td>"
                                . "</tr>"
                            );
                }
                $connectie = NULL;
    }

    function haalBerichtOp(){
        $stmt= $connectie-> prepare("Select m.bericht, g.voornaam, g.tussenvoegsel, g.achternaam, g.foto FROM mededeling m JOIN gebruiker g ON m.persoon_id= g.persoon_id ORDER BY m.datum DESC, m.tijd DESC;")
    }
?>