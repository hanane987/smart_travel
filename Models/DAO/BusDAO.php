<?php
// include 'Database\DB.php'; 
// include 'Models\Busclass.php'; 
class BusDAO {
    private $db;

    public function __construct() {
        $this->db = DatabaseConnection::getInstance()->getConnection();
    }

    public function getBusById($busID) {
        $query = "SELECT * FROM bus WHERE bus_id = :busID";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':busID', $busID, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllBuses() {
        $query = "SELECT * FROM bus";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addBus(Bus $bus) {
        try {
            $query = "INSERT INTO bus (numero_bus, plaque_immatriculation, entreprise, capacite, company_id)
                    VALUES (:numeroBus, :plaqueImmatriculation, :entreprise, :capacite, :companyID)";

            $numeroBus = $bus->getNumeroBus();
            $plaqueImmatriculation = $bus->getPlaqueImmatriculation();
            $entreprise = $bus->getEntreprise();
            $capacite = $bus->getCapacite();
            $companyID = $bus->getCompanyID();

            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':numeroBus', $numeroBus);
            $stmt->bindParam(':plaqueImmatriculation', $plaqueImmatriculation);
            $stmt->bindParam(':entreprise', $entreprise);
            $stmt->bindParam(':capacite', $capacite, PDO::PARAM_INT);
            $stmt->bindParam(':companyID', $companyID, PDO::PARAM_INT);

            return $stmt->execute();
        } catch (PDOException $e) {
            // Log or handle the exception
            error_log("Error adding Bus: " . $e->getMessage());
            return false;
        }
    }

    public function deleteBus($busID) {
        $query = "DELETE FROM bus WHERE bus_id = :busID";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':busID', $busID, PDO::PARAM_INT);
        $result = $stmt->execute();

        return $result;
    }

}

$busDAO = new BusDAO();

// Create a new Bus object with the necessary details
$newBus = new Bus(
    null,               // The ID will be assigned by the database
    'Bus123',           // Replace with the desired values
    'ABC123',           // Replace with the desired values
    'Example Company',  // Replace with the desired values
    50,                 // Replace with the desired values
    1                   // Replace with the desired values
);

// Add the new Bus to the database
$result = $busDAO->addBus($newBus);

if ($result) {
    echo "Add Bus Result: Success" . PHP_EOL;
    
    // Optionally, you can retrieve the newly added Bus from the database
    $addedBus = $busDAO->getBusById($newBus->getBusID());

    // Check if the Bus was retrieved successfully
    if ($addedBus) {
        echo "Bus added successfully:" . PHP_EOL;
        print_r($addedBus);
    } else {
        echo "Failed to retrieve the added Bus." . PHP_EOL;
    }
} else {
    echo "Add Bus Result: Failure" . PHP_EOL;
}
?>

