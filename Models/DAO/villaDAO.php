<?php
require_once 'connexion.php'; 

class VilleDAO {
    private $db;

    public function __construct() {
        $this->db = DatabaseConnection::getInstance()->getConnection();
    }

    public function getVilleById($villeID) {
        $query = "SELECT * FROM ville WHERE ville_id = :villeID";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':villeID', $villeID, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllVilles() {
        $query = "SELECT * FROM ville";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addVille(Ville $ville) {
        try {
            $query = "INSERT INTO ville (ville_name) VALUES (:villeName)";
            $villeName = $ville->getVilleName();

            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':villeName', $villeName);

            return $stmt->execute();
        } catch (PDOException $e) {
            // Log or handle the exception
            error_log("Error adding Ville: " . $e->getMessage());
            return false;
        }
    }

    public function deleteVille($villeID) {
        $query = "DELETE FROM ville WHERE ville_id = :villeID";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':villeID', $villeID, PDO::PARAM_INT);
        $result = $stmt->execute();

        return $result;
    }

}



?>
