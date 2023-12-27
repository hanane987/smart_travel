
<?php

// Assuming you have logic to fetch $horaire from your data source
// This could be based on an ID passed through GET or POST parameters

// Example: Fetching $horaire using an HoraireDAO
include_once __DIR__ . '/../Models/DAO/HoraireDAO.php';

$horaireDAO = new HoraireDAO();
$Horaire = $horaireDAO->getHoraireById($_GET['horaire_id']); // Adjust based on your implementation

// Include the form template


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form action="index.php?action=update" method="post">
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Title </label>
  <input type="text" value="<?= $horaire->getHoraireID() ?>" class="form-control" name="Title" id="formGroupExampleInput" placeholder="Example input placeholder">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Genra</label>
  <input type="text" class="form-control" value="<?= $horaire->getDate() ?>" name="Genra" id="formGroupExampleInput2" placeholder="Another input placeholder">
</div>
<div class="mb-3" >
  <label for="formGroupExampleInput2" class="form-label">ISBN</label>
  <input  type="text" class="form-control" name="ISBN" readonly value="<?= $horaire->getHeureDepart() ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
</div>

<div class="mb-3" >
  <label for="formGroupExampleInput2" class="form-label">ISBN</label>
  <input  type="text" class="form-control" name="ISBN" readonly value="<?= $horaire->getHeureArrivee() ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
</div>
<div class="mb-3" >
  <label for="formGroupExampleInput2" class="form-label">ISBN</label>
  <input  type="text" class="form-control" name="ISBN" readonly value="<?= $horaire->getSiegesDisponibles() ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
</div>
<div class="mb-3" >
  <label for="formGroupExampleInput2" class="form-label">ISBN</label>
  <input  type="text" class="form-control" name="ISBN" readonly value="<?= $horaire->getBusID() ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
</div>
<div class="mb-3" >
  <label for="formGroupExampleInput2" class="form-label">ISBN</label>
  <input  type="text" class="form-control" name="ISBN" readonly value="<?= $horaire->setRouteID() ?>" id="formGroupExampleInput2" placeholder="Another input placeholder">
</div>
<button type="submit" name="submit">submit</button>
</form>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>