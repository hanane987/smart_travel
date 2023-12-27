<?php 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste des horaires</h1>
    <table>
        <tr>
            <th>Horaire ID</th>
            <th>Date</th>
            <th>Heure Départ</th>
            <th>Heure Arrivée</th>
            <th>Sieges Disponibles</th>
            <th>Bus ID</th>
            <th>Route ID</th>
        </tr>
        <?php
            foreach($Horaires as $horaire)  {
                echo "<tr> 
                    <td>".$horaire->getHoraireID()."</td>
                    <td>".$horaire->getDate()."</td>
                    <td>".$horaire->getHeureDepart()."</td>
                    <td>".$horaire->getHeureArrivee()."</td>
                    <td>".$horaire->getSiegesDisponibles()."</td>
                    <td>".$horaire->getBusID()."</td>
                    <td>".$horaire->getRouteID()."</td>
                </tr>";
                // var_dump($Horaires);
                        }
        ?>
    </table>
</body>
</html>