<?php
require_once __DIR__.'\..\DB.php';
require_once __DIR__.'\..\Horaireclass.php';

class HoraireDAO {
    private $db;

    public function __construct() {
        $this->db = DatabaseConnection::getInstance()->getConnection();
    }

    public function getHoraireById($horaireID) {
        $query = "SELECT * FROM horaire WHERE horaire_id = :horaireID";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':horaireID', $horaireID, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllHoraires() {
        $query = "SELECT * FROM horaire";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $horaireDATA = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $horaireObject = [];
        foreach($horaireDATA as $h) {
            $horaireObject []= new Horaire($h['HoraireID'], $h['Date'], $h['HeureDepart'], $h['HeureArrivee'], $h['SiegesDisponibles'], $h['BusID'], $h['RouteID']);
        }
        return $horaireObject;
        
        
    }

    public function addHoraire(Horaire $horaire) {
        try {
            $query = "INSERT INTO horaire (date, heure_depart, heure_arrivee, sieges_disponibles, bus_id, route_id)
                    VALUES (:date, :heureDepart, :heureArrivee, :siegesDisponibles, :busID, :routeID)";

            $date = $horaire->getDate();
            $heureDepart = $horaire->getHeureDepart();
            $heureArrivee = $horaire->getHeureArrivee();
            $siegesDisponibles = $horaire->getSiegesDisponibles();
            $busID = $horaire->getBusID();
            $routeID = $horaire->getRouteID();

            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':date', $date);
            $stmt->bindParam(':heureDepart', $heureDepart);
            $stmt->bindParam(':heureArrivee', $heureArrivee);
            $stmt->bindParam(':siegesDisponibles', $siegesDisponibles, PDO::PARAM_INT);
            $stmt->bindParam(':busID', $busID, PDO::PARAM_INT);
            $stmt->bindParam(':routeID', $routeID, PDO::PARAM_INT);

            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error adding Horaire: " . $e->getMessage());
            $stmt->execute();
            return false;
        }
    }

    public function deleteHoraire($horaireID) {
        $query = "DELETE FROM horaire WHERE HoraireID = :HoraireID";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':HoraireID', $horaireID, PDO::PARAM_INT);
        $stmt->execute();
      
    }

  
}
// Assuming you have an instance of HoraireDAO
// $horaireDAO = new HoraireDAO();

// // Assuming you have an instance of Horaire and the necessary properties are set
// $horaire = new Horaire($horaireID, $date, $heureDepart, $heureArrivee, $siegesDisponibles, $busID, $routeID);

// // Set the properties before calling methods on $horaire
// $horaireID = 1; // Replace with the actual Horaire ID
// $date = '2023-01-02';
// $heureDepart = '10:30:00';
// $heureArrivee = '14:30:00';
// $siegesDisponibles = 30;
// $busID = 102;
// $routeID = 202;

// $horaire->setHoraireID($horaireID);
// $horaire->setDate($date);
// $horaire->setHeureDepart($heureDepart);
// $horaire->setHeureArrivee($heureArrivee);
// $horaire->setSiegesDisponibles($siegesDisponibles);
// $horaire->setBusID($busID);
// $horaire->setRouteID($routeID);

// ... (rest of your code)

?>
