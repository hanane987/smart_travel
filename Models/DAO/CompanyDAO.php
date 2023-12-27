<?php
require_once 'Database\connexion.php'; 

class CompanyDAO {
    private $db;

    public function __construct() {
        $this->db = DatabaseConnection::getInstance()->getConnection();
    }

    public function getCompanyById($companyID) {
        $query = "SELECT * FROM company WHERE company_id = :companyID";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':companyID', $companyID, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllCompanies() {
        $query = "SELECT * FROM company";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addCompany(Company $company) {
        try {
            $query = "INSERT INTO company (img, company_name)
                    VALUES (:img, :companyName)";

            $img = $company->getImg();
            $companyName = $company->getCompanyName();

            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':img', $img);
            $stmt->bindParam(':companyName', $companyName);

            return $stmt->execute();
        } catch (PDOException $e) {
            // Log or handle the exception
            error_log("Error adding Company: " . $e->getMessage());
            return false;
        }
    }

    public function deleteCompany($companyID) {
        $query = "DELETE FROM company WHERE company_id = :companyID";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':companyID', $companyID, PDO::PARAM_INT);
        $result = $stmt->execute();

        return $result;
    }


}



?>

