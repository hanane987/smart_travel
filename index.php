<?php 
include "Controller/AdminController.php" ;


$controller_Horaire = new controller_Horaire();

// $controller_Horaire->getAllHoraires(); 
// $horaireID = 2;
// $controller_Horaire->deleteHoraire($horaireID); 



// $contoller_horaire->getAllHoraires();


if(isset($_GET['action'])) {
    $action = $_GET['action'] ;
    switch($action) {
        case 'add_horiare':
            $contoller_Bus->addHoraire();
            break;
        case 'updateBus':
            $contoller_Bus->updateForm();
            break;
        case 'delete_horaire':
            $controller_Horaire->deleteHoraire(); 
            break;
        case 'horaires':
            $contoller_horaire->getAllHoraires();
            break;


    }
}else{
    $contoller_horaire->getAllHoraires();
}

// include_once 'Views/Display.php';
?>




<!-- include "Controller\AdminController.php" ;

$controller_include "Controller\AdminController.php" ;

$controller_Horaire = new HoraireDAO(); // Fix the variable name

if (isset($_GET["action"])) {
    $action = $_GET["action"];
    if ($action === "getAllHoraires") {
        $controller_Horaire->getAllHoraires(); // Call the new method
    }
    elseif ($action === "deleteHoraire") {
        // Assuming you have the $horaireID from somewhere
        $horaireID = $_GET["horaireID"];
        $controller_Horaire->deleteHoraire($horaireID); // Call the new method
    }
} else {
    $controller_Horaire->getAllHoraires(); // Call the default method
}
if (isset($_GET["action"])) {
    $action = $_GET["action"];
    if ($action === "update") {
        $controller_Horaire-> getHorair(); // Fix the method name
    }
    if ($action === "getHoraires") {
        $controller_Horaire->getHoraires(); // Fix the method name
    }
} else {
    $controller_Horaire->getHoraires(); // Fix the method name
} -->
 

<!-- //    $contoller_Books->afficheform() ; 

// $contoller_Books->setBooks() ;  -->
