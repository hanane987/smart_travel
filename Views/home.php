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
                </div>
             
            </div>
        </div>
    </div>
</div> 
</body>
</html>


