<?php 
include_once __DIR__.'\..\Models\DAO\HoraireDAO.php'; 

class controller_Horaire {

    function getAllHoraires()  {
        $HoraireDAO = new HoraireDAO();
        $Horaires = $HoraireDAO->getAllHoraires();
        include "Views/table.php"; 
    }

    public function deleteHoraire() {
      $horaireID = $_GET['id'];
      $HoraireDAO = new HoraireDAO();
      $HoraireDAO->deleteHoraire($horaireID);
    }
   
    function addHoraire() {
      try {
          // Assuming you have an instance of HoraireDAO
          $horaireDAO = new HoraireDAO();
  
          // Replace the following values with actual data from your form or another source
          $date = $_POST["date"];
          $heureDepart = $_POST["heureDepart"];
          $heureArrivee = $_POST["heureArrivee"];
          $siegesDisponibles = $_POST["siegesDisponibles"];
          $busID = $_POST["busID"];
          $routeID = $_POST["routeID"];
  
          // Create an instance of Horaire with the provided data
          $horaire = new Horaire(null, $date, $heureDepart, $heureArrivee, $siegesDisponibles, $busID, $routeID);
  
          // Call addHoraire method with the defined variables
          $result = $horaireDAO->addHoraire($horaire);
  
          if ($result) {
              echo "Horaire added successfully!";
          } else {
              echo "Error adding Horaire.";
          }
      } catch (PDOException $e) {
          // Handle PDOException (database error)
          echo "PDOException: " . $e->getMessage();
      } catch (Exception $e) {
          // Handle other exceptions
          echo "Exception: " . $e->getMessage();
      }
  
      // Use forward slash for file path
      include "View/update.php";
  }
  
  
}   

//     function getBooksForm()  {
        
//    $BookDAO = new BookDAO() ;
//    $books = $BookDAO-> get_books();

//  return $books ;


//     }
  
?>