<?php
include_once __DIR__.'\..\Models\DAO\HoraireDAO.php';


// Assuming you have an instance of HoraireDAO
    $horaireDAO = new HoraireDAO();

    // Fetch the data using getAllHoraires method
    $Horaires = $horaireDAO->getAllHoraires();
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <title>Document</title>
    <link rel="stylesheet" href="style.css">


</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <div class="panel">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-sm-3 col-xs-12">
                            <h4 class="title">Data <span>List</span></h4>
                        </div>
                       
                    </div>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>horaireID</th>
                                <th>date</th>
                                <th>heureDepart</th>
                                <th>heureArrivee</th>
                                <th>siegesDisponibles</th>
                                <th>busID</th>
                                <th>routeID</th>
                                <th>Etat</th>
                            </tr>
                        </thead>
                        <?php
foreach ($Horaires as $horaire) {
    echo "<tr>
            <td>".$horaire->getHoraireID()."</td>
            <td>".$horaire->getDate()."</td>
            <td>".$horaire->getHeureDepart()."</td>
            <td>".$horaire->getHeureArrivee()."</td>
            <td>".$horaire->getSiegesDisponibles()."</td>
            <td>".$horaire->getBusID()."</td>
            <td>".$horaire->getRouteID()."</td>
            <td>
                <ul class='action-list'>
                    <li><a href='../index.php?action=add_horaire&id=".$horaire->getHoraireID()."' data-tip='add'><i class='fa fa-plus'></i></a></li>
                    <li><a href='../index.php?action=delete_horaire&id=".$horaire->getHoraireID()."' data-tip='edit'><i class='fa fa-edit'></i></a></li>
                    <li><a href='../index.php?action=delete_horaire&id=".$horaire->getHoraireID()."' data-tip='delete'><i class='fa fa-trash'></i></a></li>
                </ul>
            </td>
        </tr>";
}
?>


                  
                    </table>
                </div>
             
            </div>
        </div>
    </div>
</div> 

</body>
</html>






