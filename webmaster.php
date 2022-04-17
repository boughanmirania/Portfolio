<div style="display:flex; flex-direction:column; width:100%;height:100%;justify-content:space-around">
    <div>

        <table>
            <tr>
                <th>name</th>
                <th>email</th>
                <th>role</th>
                <th>supprimer</th>
            </tr>
            <?php

            require("connect.php");

            $sql = "SELECT * FROM utilisateur";

            $result = $conn->query($sql);

            if (!$result) {
                trigger_error('Invalid query: ' . $conn->error);
            }

            while ($row = $result->fetch_assoc()) {
                echo ("<tr>
                    <td>" . $row["name"] . "</td> 
                    <td>" . $row["email"] . "</td> 
                    <td>" . $row["role"] . "</td> 
                    <td style='cursor:pointer;' ><a href='supprimerUtil.php?idUtil=" . $row["id"] . "'>Supprimer</a></td> 
                </tr>");
            }

            ?>
        </table>
        <a style="font-family: Helvetica, sans-serif;" href="signup.php">Ajouter</a>

        <a style="font-family: Helvetica, sans-serif;" href="index.php">Retour</a>
    </div>

    <table>
        <tr>
            <th>nom</th>
            <th>prenom</th>
            <th>email</th>
            <th>num tel</th>
            <th>objet</th>
            <th>msg</th>
            <th>date</th>
        </tr>
        <?php

        $sql = "SELECT * FROM contacts";

        $result = $conn->query($sql);

        if (!$result) {
            trigger_error('Invalid query: ' . $conn->error);
        }

        while ($row = $result->fetch_assoc()) {
            echo ("<tr>
                <td>" . $row["Nom"] . "</td> 
                <td>" . $row["Prenom"] . "</td> 
                <td>" . $row["Email"] . "</td> 
                <td>" . $row["NumTel"] . "</td> 
                <td>" . $row["Objet"] . "</td> 
                <td>" . $row["Msg"] . "</td> 
                <td>" . $row["Date"] . "</td> 
            </tr>");
        }

        ?>
    </table>
</div>